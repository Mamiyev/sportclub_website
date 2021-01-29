<?php

$connect = mysqli_connect('localhost', '', '', '');

if (!$connect) {
    die('Error connect to DataBase');
}