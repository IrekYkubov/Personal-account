<?php

// Параметры для подключения баззы данных
$user = 'root';
$passwordDb = 'root';
$db = 'personal_account';
$host = 'localhost';
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;
// Создаем обьект PDO для подключение к базе дванных
$pdo = new PDO($dsn, $user, $passwordDb);
