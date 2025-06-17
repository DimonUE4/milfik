<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mifik";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// echo "Подключение к БД прошло успешно!";
?>
