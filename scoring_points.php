<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 8/10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Тест закончен</h1>
                </div>
                <div class="modal-body">
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            let results = localStorage.getItem('results');
                            document.getElementById('progress').value = results;
                        });

                        document.getElementById('createPageButton').addEventListener('click', function(event) {
                            let results = JSON.stringify(localStorage.getItem('results'));
                            document.getElementById('progress').value = results;
                            event.preventDefault();
                        });
                    </script>

                    <div>
                        <div style="display: flex; justify-content: center; margin: 1% 0;">
                            <form action="process_progress.php" method="POST" id="progressForm">
                                <input id="progress" name="progress" type="hidden" value="">
                                <input id="createPageButton" type="submit" class="btn btn-outline-success" value="Перейти к сертификату">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="src/js/additionally.js"></script>
</body>

</html>