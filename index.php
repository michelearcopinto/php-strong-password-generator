<?php
$length_password = $_GET['length_password'];
$password_repetition = $_GET['password_repetition'];
$letters_checked = $_GET['letters_checked'];
$numbers_checked = $_GET['numbers_checked'];
$symbols_checked = $_GET['symbols_checked'];
$generated_password = '';


var_dump($inserted_password, $password_repetition, $letters_checked, $numbers_checked, $symbols_checked);

while (strlen($generated_password) < $length_password) {

    $random_uppercase_letter = chr(rand(65, 90));

    $random_lowercase_letter = chr(rand(97, 122));

    $random_number = rand(0, 9);

    $picked_number = rand(1, 4);

    if ($picked_number === 1) {

        $random_symbol = chr(rand(33, 47));
    } elseif ($picked_number === 2) {

        $random_symbol = chr(rand(58, 64));
    } elseif ($picked_number === 3) {

        $random_symbol = chr(rand(91, 96));
    } elseif ($picked_number === 4) {

        $random_symbol = chr(rand(123, 126));
    }

    if ($picked_number === 1 && $letters_checked === 'letters_checked') {

        $generated_password .=  $random_uppercase_letter;
    } elseif ($picked_number === 2 && $letters_checked === 'letters_checked') {

        $generated_password .= $random_lowercase_letter;
    } elseif ($picked_number === 3 && $numbers_checked === 'numbers_checked') {

        $generated_password .= $random_number;
    } elseif ($picked_number === 4 && $symbols_checked === 'symbols_checked') {

        $generated_password .= $random_symbol;
    }
}


var_dump($random_uppercase_letter, $random_lowercase_letter, $random_symbol);
var_dump($generated_password);
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
            /* background-color: #001632; */
        }
    </style>
</head>

<body>
    <h1 class="text-capitalize text-secondary text-center mt-5">strong password generator</h1>
    <h2 class="text-capitalize text-center text-white">Genera una password sicura</h2>
    <div class="alert alert-primary container" role="alert">
        Password generata
    </div>
    <div class="alert alert-danger container" role="alert">
        Nessun parametro valido inserito
    </div>

    <div class="card container ps-5 py-5">
        <form action="index.php" method="GET" class="w-75 row d-flex">
            <div class="col-9">
                <label for="length_password" class="form-label mb-4">Lunghezza password:</label>
                <br>
                <span>Password generata:</span>
                <br>
                <span>Consenti ripetizioni di uno o più caratteri:</span>
            </div>
            <div class="col-3">
                <input type="number" name="length_password" class="form-control mb-3" id="length_password">
                <input type="text" class="form-control mb-3" <?php echo "value='$generated_password'" ?> readonly>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="password_repetition" value="yes_repetition" id="yes_repetition" <?php if ($password_repetition === 'yes_repetition') echo 'checked' ?>>
                    <label class="form-check-label" for="yes_repetition">
                        Sì
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="password_repetition" value="no_repetition" id="no_repetition" <?php if ($password_repetition === 'no_repetition') echo 'checked' ?>>
                    <label class="form-check-label" for="no_repetition">
                        No
                    </label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="letters_checked" value="letters_checked" class="form-check-input" id="letters_checked" <?php if ($letters_checked === 'letters_checked') echo 'checked' ?>>
                    <label class="form-check-label" for="letters_checked">Lettere</label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="numbers_checked" value="numbers_checked" class="form-check-input" id="numbers_checked" <?php if ($numbers_checked === 'numbers_checked') echo 'checked' ?>>
                    <label class="form-check-label" for="numbers_checked">Numeri</label>
                </div>
                <div class="mb-2 form-check">
                    <input type="checkbox" name="symbols_checked" value="symbols_checked" class="form-check-input" id="symbols_checked" <?php if ($symbols_checked === 'symbols_checked') echo 'checked' ?>>
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