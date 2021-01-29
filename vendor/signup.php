<?php

session_start();
require_once 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['username']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($username === '') {
    $error_fields[] = 'username';
}

if ($password === '') {
    $error_fields[] = 'password';
}

//if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $error_fields[] = 'email';
//}


if (!preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $email)) {
    $error_fields[]= 'email';
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

mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')");


$response = [
    "status" => true,
    "message" => "Регистрация прошла успешно!",
];
echo json_encode($response);


