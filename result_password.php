<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #001632;
        }
    </style>
</head>

<body>
    <h1 class="text-capitalize text-secondary text-center mt-5">strong password generator</h1>
    <h2 class="text-capitalize text-center text-white">Genera una password sicura</h2>

    <?php
    if ($_SESSION['user_password'])
        echo "
        <div class='alert alert-success container fs-5' role='alert'>
            Password generata!
        </div>"
    ?>

    <div class="card container p-5 fs-5">
        <h2 class="text-center">La password generata è:</h2>
        <h1 class="text-center"><?php echo $_SESSION['user_password'] ?></h1>
    </div>

</body>

</html>