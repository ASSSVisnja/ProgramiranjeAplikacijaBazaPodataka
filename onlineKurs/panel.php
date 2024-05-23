<?php
include("php/dbconnection.php");
session_start();

if (!isset($_SESSION["email"])) {
    die(header("Location: ../index.php?error=2"));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>User</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">

                <?php

                echo '<div class="card text-white bg-dark">';
                echo '<h3 class="card-header">Dobrodosli</h3>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $_SESSION['ime'] . ' ' . $_SESSION['prezime'] . '</h5>';
                echo '<h6 class="card-subtitle text-muted"></h6>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<p class="card-text">';
                echo "Email: " . $_SESSION['email'];
                echo '</p>';
                echo '</div>';
                ?>

            </div>
            <div class="col-3">

            </div>
        </div>
    </div>


    <div class="container-fluid fixed-top">
        <div class="card text-white bg-dark">
            <h3 class="card-header">Online Kurs
                <button type="button" class="btn btn-primary"><a href="php/logout.php">Logout</a></button>
                <button type="button" class="btn btn-primary"><a href="kursevi.php">Kursevi</a></button>
                <button type="button" class="btn btn-primary"><a href="materijali.php">Materijali</a></button>
                <button type="button" class="btn btn-primary"><a href="polaznici.php">Polaznici</a></button>
                <button type="button" class="btn btn-primary"><a href="predavaci.php">Predavaci</a></button>
            </h3>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>