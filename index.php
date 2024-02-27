<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #001632;
        }

        .form-control {
            width: fit-content;
        }
    </style>
</head>

<body>
    <h1 class="text-capitalize text-secondary text-center mt-5">strong password generator</h1>
    <h2 class="text-capitalize text-center text-white">Genera una password sicura</h2>
    <div class="alert alert-primary container" role="alert">
        A simple primary alert—check it out!
    </div>
    <div class="alert alert-danger container" role="alert">
        A simple danger alert—check it out!
    </div>

    <div class="card container ps-5 py-5">
        <form class="w-75 row d-flex">
            <div class="col-9">
                <label for="inserted_password" class="form-label mb-4">Lunghezza password:</label>
                <br>
                <span>Consenti ripetizioni di uno o più caratteri:</span>
            </div>
            <div class="col-3">
                <input type="password" class="form-control mb-3" id="inserted_password">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="yes-repetition" id="yes-repetition">
                    <label class="form-check-label" for="yes-repetition">
                        Sì
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="no-repetition" id="no-repetition">
                    <label class="form-check-label" for="no-repetition">
                        No
                    </label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="letters_checked" class="form-check-input" id="letters_checked">
                    <label class="form-check-label" for="letters_checked">Lettere</label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="numbers_checked" class="form-check-input" id="numbers_checked">
                    <label class="form-check-label" for="numbers_checked">Numeri</label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="symbols_checked" class="form-check-input" id="symbols_checked">
                    <label class="form-check-label" for="symbols_checked">Simboli</label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Anulla</button>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>