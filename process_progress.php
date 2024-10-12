<?php
session_start();
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $results = $_POST['progress'];

    include 'config.php';
    // Подключаемся к базе данных
    $link = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($link, "SET NAMES 'utf8'");

    // Проверяем, были ли данные подготовлены правильно
    if ($results === null ||!is_string($results)) {
        echo "ошибка";
        exit;
    }

    // Добавляем данные в базу данных
    $id_user = $_SESSION['user_id'];
    
    $query = "UPDATE `progress` SET `new_to_PC` =?, `download_sertificate` = '1' WHERE `progress`.`id` =?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "ii",  $results, $id_user);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Регистрация прошла успешно
        header("Location: https://durashca.github.io/wseznai/the_ending.html");
    } else {
        // Регистрация не прошла
        echo "ошибка";
    }

    // Закрываем соединение с базой данных
    mysqli_close($link);
}