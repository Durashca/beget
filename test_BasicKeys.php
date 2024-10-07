<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 3/10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Читаем вопрос, даем ответ</h1>
      </div>
      <div class="modal-body">

  <p>Выберите, что такое "Num Lock" и что он делает.</p>
  <div>
  <div class="block_radio" >
  <input type="radio" id="option1" name="option" value="1" />
  <label for="option1" style="margin-left: 10px;">Клавиша, которая выключает систему.</label>
</div>
<div class="block_radio" >
  <input type="radio" id="option2" name="option" value="2" />
  <label for="option2" style="margin-left: 10px;">Клавиша, используемая для ввода: @, #, $ и т. д.</label>
</div>
<div class="block_radio" >
  <input type="radio" id="option3" name="option" value="3" />
  <label for="option3" style="margin-left: 10px;">Клавиша, используемая для переключения между разными языками ввода.</label>
</div>
<div class="block_radio" >
  <input type="radio" id="option4" name="option" value="4" />
  <label for="option4" style="margin-left: 10px;">Переключатель, который включает или выключает цифровую клавиатуру справа на клавиатуре.</label>
</div>
  </div>
  <div style="display: flex; justify-content: center; margin: 1% 0;">
    <button id="createPageButton" type="button" class="btn btn-outline-success">
      <a class="nav-link active" href="test_Fkeys.php">Ответить</a>
    </button>
  </div>
</div>
</div>
</div>

<script>
const checkbox = document.querySelectorAll('input[type="radio"]');
document.querySelector('#createPageButton').addEventListener('click', function() {
  let checked = false;
  checkbox.forEach(function(item) {
    if (item.checked) {
      checked = true;
    }
  });
  if (checked) {
    const correctAnswer = 4;
    // правильный ответ - 4
    if (checkbox[correctAnswer - 1].checked) {
      let result_arr = JSON.parse(localStorage.getItem('results')) || [false];
      // инициализировать массив, если он еще не существует
      result_arr[2] = true;
      // установить третий элемент массива в true
      localStorage.setItem('results', JSON.stringify(result_arr));
    }
  }
});
</script>

<script src="src/js/additionally.js"></script>

</body>
</html>