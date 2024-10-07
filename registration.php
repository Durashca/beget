<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <style>
        .input-eye {
            position: relative;
            display: inline-flex;
            /* Изменено на inline-flex для выравнивания */
            align-items: center;
            /* Центрирование по вертикали */
        }

        #regPassword {
            padding-right: 30px;
            /* Отступ для span */
            width: 100%;
            /* Установите ширину на 100% для адаптивности */
        }

        #PasswordLogin {
            padding-right: 30px;
            /* Отступ для span */
            width: 100%;
            /* Установите ширину на 100% для адаптивности */
        }

        .eye-icon {
            width: 20px;
            /* Установите фиксированную ширину */
            height: 20px;
            /* Установите фиксированную высоту */
            background-size: cover;
            /* Обеспечивает правильное отображение изображения */
            background-image: url('src/images/svg/view.svg');
            cursor: pointer;
            /* Указатель на курсор для кликабельного элемента */
            margin-left: -30px;
            /* Отрицательный отступ для перекрытия поля ввода */
        }
    </style>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="staticBackdropLabel">Заполните данные</h3>
                </div>
                <div class="modal-body">

                    <div style="display: flex; justify-content: center; margin: 1% 0;">
                        <form action="process_reg.php" method="POST">
                            <div class=" inputs container text-left">
                                <div class="col">
                                    <div class="input-container">

                                        <label for="regName" class="form-label">Напишите свое имя</label>
                                        <input id="regName" name="reg_name" type="text" placeholder=" Введите имя" required readonly onfocus="this.removeAttribute('readonly');">

                                        <label for="regSurName" class="form-label">Напишите фамилию</label>
                                        <input id="regSurName" name="reg_surname" type="text" placeholder="Напишите фамилию" required readonly onfocus="this.removeAttribute('readonly');">
                                        <style>
                                            .input-group {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .input-group input {
                                                flex: 1;
                                                padding: 0.5rem;
                                                border: 1px solid #ccc;
                                                border-radius: 0.25rem;
                                                font-size: 1rem;
                                            }

                                            .input-group input:not(:last-child) {
                                                margin-right: 0.5rem;
                                            }
                                        </style>
                                        <label for="regClass" class="form-label">Напишите свой класс</label>

                                        <div class="input-group">
                                            <input id="regClassFigure" name="reg_class_figure" placeholder="цифра" type="text" list="options" required>
                                            <datalist id="options">
                                                <option value="1"></option>
                                                <option value="2"></option>
                                                <option value="3"></option>
                                                <option value="4"></option>
                                                <option value="5"></option>
                                                <option value="6"></option>
                                                <option value="7"></option>
                                                <option value="8"></option>
                                                <option value="9"></option>
                                                <option value="10"></option>
                                                <option value="11"></option>
                                            </datalist>
                                            <input id="regClassLetter" name="reg_class_letter" placeholder="буква" type="text" list="options2" >
                                            <datalist id="options2">
                                                <option value="А"></option>
                                                <option value="Б"></option>
                                                <option value="В"></option>
                                                <option value="Г"></option>
                                                <option value="нету"></option>
                                            </datalist>

                                            
                                        </div>

                                    </div>

                                    <label for="reg_age" class="form-label">Введите свой год рождения</label>
                                    <input type="date" id="reg_age" name="reg_age" min="1903-12-31" max="2019-12-31" required>


                                </div>
                            </div>
                            <div class="bottom_form col">
                                <input style="width: 100%;" id="regButton" class="btn btn-outline-success" type="submit"
                                    value="Создать аккаунт" disabled>
                            </div>
                    </div>

                    <script>
                        let nameInputReg = document.getElementById('regName');
                        document.getElementById('regName').addEventListener('input', validateForm);
                        document.getElementById('regSurName').addEventListener('input', validateForm);
                        document.getElementById('regClassFigure').addEventListener('input', validateForm);
                        document.getElementById('regClassLetter').addEventListener('input', validateForm);
                        document.getElementById('reg_age').addEventListener('input', validateForm);



                        function validateForm() {
                            const name = document.getElementById('regName').value;
                            const regSurName = document.getElementById('regSurName').value;
                            const regClassFigure = document.getElementById('regClassFigure').value;
                            const regClassLetter = document.getElementById('regClassLetter').value;
                            const age = document.getElementById('reg_age');

                            if (name === '' || regSurName === '' || regClassLetter === '' || regClassFigure === '' || age.value === '') {
                                document.getElementById('regButton').disabled = true;
                            } else {
                                document.getElementById('regButton').disabled = false;
                            }
                        }
                    </script>
                    </form>

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