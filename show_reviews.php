<?php
// Подключаем файл с настройками подключения
include 'connect.php';

// SQL-запрос для выбора всех отзывов
$sql = "SELECT user_name, user_reviews FROM Reviews";

// Выполняем запрос
$result = mysqli_query($conn, $sql);

// Проверяем наличие данных
if (mysqli_num_rows($result) > 0) {
    // Есть данные, показываем отзывы
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>" . $row['user_name'] . "</b>: ";
        echo $row['user_reviews'] . "<br><br>";
    }
} else {
    echo "Отзывов пока нет.";
}

// Закрываем соединение с базой данных
mysqli_close($conn);
?>