<?php

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));


$error = '';
if (strlen($login) <= 2) {
    $error = 'Введите логин';
} else if (strlen($password) <= 2) {
    $error = 'Введите пороль';
}

if ($error != '') {
    echo $error;
    exit();
}


$hash = 'sdhdshrdtj';
$pass = md5($password . $hash);

require_once '../config.php';

$sql = 'SELECT `id` FROM `users` WHERE `login` = :login && `password` = :password ';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'password' => $pass]);
$user = $query->fetch(PDO::FETCH_OBJ);

if ($user->id == 0) {
    echo 'Такого пользователя не существует';
} else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    echo 'Готово';
}
