<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 1/10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Читаем вопрос, даем ответ</h1>
      </div>
      <div class="modal-body"> 
        
         <p>Выберите, что такое "fn" и что оно делает.</p> 
         <div>
         <div class="block_radio" >
             <input type="radio" id="option1" name="option" value="1" /> 
             <label for="option1">Клавиша  </label>
         </div>
         <div class="block_radio" >
              <input type="radio" id="option2" name="option" value="2" /> 
              <label for="option2">Футбол (football)</label> 
         </div>
         <div class="block_radio" >
              <input type="radio" id="option3" name="option" value="3" /> 
              <label for="option3">Язык програмирования</label> 
         </div>
         <div class="block_radio" >
              <input type="radio" id="option4" name="option" value="4" /> 
              <label for="option4">Финансовый результат </label> 
         </div>
              </div> 
              <div style="display: flex; justify-content: center; margin: 1% 0;"> 
                <button id="createPageButton" type="button" class="btn btn-outline-success"> 
                    <a class="nav-link active" href="test_Hotkeys.php">Ответить </a>
                 </button> 
                </div>
     </div>
      
    </div>
  </div>
</div>

<script>
    const radio = document.querySelectorAll('input[type="radio"]');

document.querySelector('#createPageButton').addEventListener('click', function() {
    let checked = false;

        const correctAnswer = 1; // правильный ответ - 1
        let result_arr = JSON.parse(localStorage.getItem('results')) || new Array(10).fill(false);
        if (radio[correctAnswer - 1].checked) {
             // инициализируем массив, если он еще не существует
            result_arr[0] = true; // устанавливаем элемент массива под правильным индексом в true
            localStorage.setItem('results', JSON.stringify(result_arr));
            
        }
        git branch --show-current
});
</script>

<script src="src/js/additionally.js"></script>
</body>
</html>