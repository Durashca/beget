<?php
// Подключение к базе данных
include 'config.php';

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $rating = $_POST['rating'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Добавление данных в таблицу
    $sql = "INSERT INTO estimation (name, rating, comment) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $name, $rating, $comment);

    if ($stmt->execute()) {
        header("Location: estimation.php");
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрытие подключения к базе данных
    $stmt->close();
    $conn->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оставить отзыв</title>
    <!-- Добавьте стили и скрипты Bootstrap, если используете -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
    .rating-area input[type="radio"] {
        transform: scale(1.5);
    }

    .rating-area label {
        font-size: 20px;
    }
</style>

<style>

    /* CSS для установки отступов */
#idIcoMenu {
   max-width: 5%;
   min-width: 1%;
 }
 .commentsContainer  { /* блок с коментом */
    border: 1px solid darkgrey;
    border-radius: 3px 3px 10px 3px;
    margin: 3% 0;
    width: auto;
    display: flex;
    align-self: start;
}
/* форма отправки*/
textarea {
  resize: none;
  width: 100%;
}

.comment {
    margin-bottom: 20px;
    border: 1px solid grey;
    padding: 10px;

}
.comment-author{
  margin: 0;
}
.comment-header{
  margin: 0 0 2px;
  font-weight: bold;
}

#commentForm {
    margin: 0 10px;
}
#comments_users {
    margin: 10px;
}

</style>

</head>
<body>


<!--  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Оставьте отзыв </h1>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div>
                    <label>Ваша оценка (1 - 5)</label>
    <div class="rating-area">
    <input type="radio" id="star-1" name="rating" value="1">
    <label for="star-1" title="Оценка «1»"></label>
    <input type="radio" id="star-2" name="rating" value="2">
    <label for="star-2" title="Оценка «2»"></label>
        <input type="radio" id="star-3" name="rating" value="3">
        <label for="star-3" title="Оценка «3»"></label>
        <input type="radio" id="star-4" name="rating" value="4">
        <label for="star-4" title="Оценка «4»"></label>
        
        <input type="radio" id="star-5" name="rating" value="5">
        <label for="star-5" title="Оценка «5»"></label>
        
    </div>
                    </div>
    
<div>
<label>Ваше имя</label>
<input style="width: 100%;" type="text" name="name" required>
</div>
    

    <div>
    <label>Отзыв</label>
    <textarea style="width: 100%;" name="comment" rows="4" cols="50" required></textarea>
    </div>

    <button style="width: 100%;" class="btn btn-outline-success" type="submit">Отправить отзыв</button>
    <a style="width: 100%;     margin-top: 10px;" class="btn btn-outline-success" href="https://durashca.github.io/wseznai/the_ending.html"> Вернуться к сертификату</a>
</form>


<?php
// Подключение к базе данных
include 'config.php';

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение комментариев из базы данных
$sql = "SELECT name, rating, comment, date FROM estimation ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод комментариев в виде списка
    echo "<h2>Комментарии:</h2>";
    echo "<div id='comment_area'>";
    $output = ""; // Инициализация переменной $output
    while($row = $result->fetch_assoc()) {
        $output .= "<div style='margin-left: 0;' class='container'>";

                $output .= "<div class='comment'>";
                $output .= "<div class='comment-header'>";

                $output .= "<h4 class='comment-author'>".  (($row["name"] == null || $row["name"] == '') ? 'Пользователь' : $row["name"]) . "</h4>";
                $output .= "<span class='comment-date'>". 'время: ' . date("d m Y", strtotime($row['date'])) . "</span>";
                $output .= "</div>"; // Закрытие.comment-header
                $output .= "<div class='comment-body'>";
                $output .= "<div class='rating_div'> " . 'оценка: '  . $row["rating"] .  " </div>";
                $comment_with_a_capital_letter = $row['comment'];
                $comment_with_a_capital_letter = ucfirst($comment_with_a_capital_letter);
                $output .= "<p class='comment-text'>" . 'коментарий: ' . $comment_with_a_capital_letter . "</p>";
                $output .= "</div>"; // Закрытие.comment-body
                $output .= "</div>"; // Закрытие.comment
                $output .= "</div>"; // Закрытие.container
    }
    echo $output; // Вывод переменной $output
    echo "</div>"; // Закрытие комментария
} else {
    echo "Нет комментариев";
}

// Закрытие подключения к базе данных
$conn->close();
?>
                  

                  
                </div>
            </div>
<!--  -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            modal.show();
        });
    </script>
    <script src="src/js/additionally.js"></script>

</body>
</html>
