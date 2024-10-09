<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // нажатие на кнопку
    if (isset($_POST['reg_name']) && isset($_POST['reg_surname']) && isset($_POST['reg_class_figure']) && isset($_POST['reg_class_letter']) && isset($_POST['reg_age'])) {

        include 'config.php';


        $link = mysqli_connect($host, $user, $pass, $dbname);
        mysqli_query($link, "SET NAMES 'utf8'");


        $name = ucfirst($_POST['reg_name']);
        $surname = ucfirst($_POST['reg_surname']);

        $class = $_POST['reg_class_figure'] . ($_POST['reg_class_letter'] === 'нету' ? '' : ucfirst($_POST['reg_class_letter']) );

        $age = $_POST['reg_age'];



        // Регистрация нового пользователя

        $query = "INSERT INTO users (`name`, `surname`, `class`) VALUES (?, ?, ?);";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $surname, $class);
        if (mysqli_stmt_execute($stmt)) { 
            // Получение id нового пользователя
            $userId = mysqli_insert_id($link);

            $query = "INSERT INTO progress (id, age) VALUES (?, ?);";
            $stmt = mysqli_prepare($link, $query);
            mysqli_stmt_bind_param($stmt, "is", $userId, $age);
            mysqli_stmt_execute($stmt);

            session_start(); // Начните новую сессию для нового пользователя
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_surname'] = $surname;
            

            header("Location: Preparation.php");
            
            exit; // Важно завершить выполнение скрипта после перенаправления
        } else {
            echo "Ошибка при регистрации пользователя: " . mysqli_error($link);
        }
    }
}
