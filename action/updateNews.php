<?php

$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
$intro = filter_var($_POST['intro'], FILTER_SANITIZE_STRING);
$text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);
$id = $_POST['id'];


$error = '';
if (strlen($title) <= 2) {
    $error = 'Введите заголовок';
} else if (strlen($intro) <= 10) {
    $error = 'Введите анонс новости, более 10 символов';
} else if (strlen($text) <= 20) {
    $error = 'Введите текст новости, более 20 символов';
}


if ($error != '') {
    echo $error;
    exit();
}
require_once '../config.php';

$sql = "UPDATE `news` SET `title`= :title,`intro`= :intro,`text`= :text WHERE `id`=$id";
$query = $pdo->prepare($sql);
$query->execute(['title' => $title, 'intro' => $intro, 'text' => $text]);


echo 'Готово';
