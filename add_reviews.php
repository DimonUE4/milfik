<?php
// Подключаем файл с настройками подключения
include 'connect.php';

$name = $_POST['name'];
$revievs = $_POST['reviews'];

// SQL-запрос для заполнения строк в базе данных
$sql = "INSERT INTO Reviews (user_name, user_reviews) VALUES ('$name', '$revievs')";

// Выполняем запрос
$result = mysqli_query($conn, $sql);
header('Location: show_reviews.php');
?>