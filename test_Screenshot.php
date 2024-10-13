<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 5/10</title>
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
      <p>Как сделать снимок экрана на компьютере или ноутбуке?</p> 
      <div> 
        <div class="block_radio"> 
            <input type="radio" id="option1" name="option" value="1" /> 
            <label for="option1" style="margin-left: 10px;">Нажать на кнопку "Start" и выбрать "Снимок экрана" из меню "Выполнить".</label>
         </div> 
         <div class="block_radio"> 
            <input type="radio" id="option2" name="option" value="2" /> 
            <label for="option2" style="margin-left: 10px;">Нажать на кнопку "Print Screen" (PrtScn) на клавиатуре.</label>
         </div> 
         <div class="block_radio">
             <input type="radio" id="option3" name="option" value="3" /> 
             <label for="option3" style="margin-left: 10px;">Нажать на комбинацию клавиш "Win + Shift + D".</label> 
            </div> 
            <div class="block_radio"> 
                <input type="radio" id="option4" name="option" value="4" /> 
                <label for="option4" style="margin-left: 10px;">Использовать стороннее программное обеспечение для создания снимка экрана.</label>
             </div> 
            </div> 
            <div style="display: flex; justify-content: center; margin: 1% 0;"> 
            <span id="transition_warning"
              data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Вы не выбрали ни одного варианта">



                <button id="createPageButton" type="button" class="btn btn-outline-success"> 
                    <a class="nav-link active" href="test_TransferringFiles.php">Ответить</a> 
                </button> 
            </span>
            </div> 
        </div> 
    </div> 
</div> 
<script> 
console.log(localStorage.getItem('results'))
const radioButtons = document.querySelectorAll('input[type="radio"]'); 
document.querySelector('#createPageButton').addEventListener('click', function() { 
    let checked = false; 
    radioButtons.forEach(function(item) { 
        if (item.checked) { 
            checked = true;
        } 
    });
      if (checked) { 
        const correctAnswer = 2; 
        if (radioButtons[correctAnswer - 1].checked) { 
            let result_arr = JSON.parse(localStorage.getItem('results')) || [false]; 
            result_arr[4] = true; 
            localStorage.setItem('results', JSON.stringify(result_arr)); 
            }
             
        } 
    }); 
</script>

<script src="src/js/additionally.js"></script>

</body>
</html>