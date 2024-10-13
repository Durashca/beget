<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body >


<!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Как работаем:</h1>
      </div>
      <div class="modal-body">
        <h3 stule="text-align: center;">
          <ul style="font-size: 18px;">
            <li>Регистрируемся</li>
            <li>Отвечаем  на вопросы</li>
            <li>Забираем сертификат</li>
            
          </ul>
         </h3>
        <div  style="display: flex; justify-content: center; margin: 1% 0;">
            <button  type="button" class="btn btn-outline-success">
            <a class="nav-link active" href="registration.php">Перейти к регистрации</a>
            </button>
        </div>

      </div>
      
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
  modal.show();
});
</script>
<script src="src/js/additionally.js"></script>

</body>
</html>

