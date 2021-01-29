<?php

session_start();
require_once 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$error_fields = [];



if (!preg_match('/^[a-z0-9_-]{2,20}$/i', $username)) {
    $error_fields[]= 'username';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username'],
        "email" => $user['email']
    ];

    $response = [
        "status" => true
    ];

    echo json_encode($response);



} else {
    $response = [
        "status" => false,
        "message" => 'Неверный логин или пароль'
    ];

    echo json_encode($response);
}
?>