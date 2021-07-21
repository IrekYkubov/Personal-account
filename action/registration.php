<?php

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
$password2 = trim(filter_var($_POST['password2'], FILTER_SANITIZE_STRING));


$patternPass = "/^[a-zA-Z0-9]+$/";
$patternEmail = "/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/";
$error = '';
if (strlen($username) <= 2) {
    $error = 'Введите имя';
} else if (strlen($login) <= 2) {
    $error = 'Введите логин';
} else if (strlen($email) <= 2) {
    $error = 'Введите email';
} else if (!preg_match($patternEmail, $email)) {
    $error = 'Введите Email коректно';
} else if (strlen($password) <= 2) {
    $error = 'Введите пороль';
} else if ($password != $password2) {
    $error = 'Пороли не совпадают';
} else if (!preg_match($patternPass, $password)) {
    $error = 'Используйте только латинские буквы и цифры для создания пороля';
} else if (!preg_match($patternPass, $password2)) {
    $error = 'Используйте только латинские буквы и цифры для создания пороля';
}


$hash = 'sdhdshrdtj';
$pass = md5($password2 . $hash);

require_once '../config.php';

$sql = 'SELECT `id` FROM `users` WHERE `login` = :login';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login]);
$user = $query->fetch(PDO::FETCH_OBJ);

if ($user->id != 0) {
    $error = 'Такой логин уже существует';
}

if ($error != '') {
    echo $error;
    exit();
}

$sql = 'INSERT INTO `users`(`name`, `email`, `login`, `password`) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $pass]);


echo 'Готово';
