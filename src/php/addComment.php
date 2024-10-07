<?php
session_start(); // Добавляем эту строку, чтобы использовать сессии

$comment  = $POST['commentText'];
$iduser   = $SESSION['user_id'] ?? ' '; // Замените это на реальный идентификатор пользователя
$nameuser = $SESSION['username'] ?? ' Пользователь'; // Замените это на имя текущего пользователя или получите его из сессии
$idcomment= $POST['idСomment'];


$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'db_users';
    
// Создание соединения с базой данных
$conn = new mysqli($host, $user, $pass, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Подготовленный запрос для безопасной вставки данных
$stmt = $conn->prepare("INSERT INTO users_comment (id_comment, id_user, name_user, comment) VALUES ('$id_comment', '$id_user', '$name_user', '$comment')");

// Выполнение запроса
if ($stmt->execute()) {
    header("Location: ###.php");
    exit; // Важно завершить выполнение скрипта после перенаправления
} else {
    header("Location: ###.php");
    exit; // Важно завершить выполнение скрипта после перенаправления
}

// Закрытие запроса и соединения
$stmt->close();
$conn->close();
?>