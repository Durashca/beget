<?php
if (PHP_SAPI == 'cli') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // нажатие на кнопку
    

        include 'config.php';

        // Подключение к базе данных
        $link = mysqli_connect($host, $user, $pass, $dbname);
        if (!$link) {
            die("Ошибка подключения: ". mysqli_connect_error());
        }
        // Установка кодировки
        mysqli_query($link, "SET NAMES 'utf8'");


        // имя и фамилия
        $name = ucfirst($_POST['reg_name']);
        $surname = ucfirst($_POST['reg_surname']);


        // Проверка на класс
        if(isset($_POST['ClassCheckChecked']) && $_POST['ClassCheckChecked'] == 'on'){
            $_POST['reg_class_letter'] = '';
        }

    
        $class = $_POST['reg_class_figure']. ucwords($_POST['reg_class_letter']);

        


        // Получение возраста пользователя
        $age =  $_POST['reg_age'];

        // Регистрация нового пользователя

        $query = "INSERT INTO users (`name`, `surname`, `class`) VALUES (?,?, ? );";
        $stmt = mysqli_prepare($link, $query);
        if (!$stmt) {
            die("Ошибка подготовки запроса: ". mysqli_error($link));
        }
        mysqli_stmt_bind_param($stmt, "sss", $name, $surname, $class);
        if (mysqli_stmt_execute($stmt)) { 
            // Получение id нового пользователя
            $userId = mysqli_insert_id($link);

            $query = "INSERT INTO progress (id, age, class) VALUES (?,?, ?);";
            $stmt = mysqli_prepare($link, $query);
            if (!$stmt) {
                die("Ошибка подготовки запроса: ". mysqli_error($link));
            }
            mysqli_stmt_bind_param($stmt, "iss", $userId, $age, $class);
            if (!mysqli_stmt_execute($stmt)) {
                echo "Ошибка при добавлении записи в таблицу progress: ". mysqli_error($link);
            }

            session_start(); // Начните новую сессию для нового пользователя
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_surname'] = $surname;

            header("Location: Preparation.php");

            exit; // Важно завершить выполнение скрипта после перенаправления
        } else {
            echo "Ошибка при регистрации пользователя: ". mysqli_error($link);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);

}