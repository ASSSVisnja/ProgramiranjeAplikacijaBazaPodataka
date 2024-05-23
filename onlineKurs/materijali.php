<?php
session_start();
if (empty($_SESSION["ime"])) {
    die(header("Location: ../index.php"));
} else {
    $ime = $_SESSION["ime"];
    $prezime = $_SESSION["prezime"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Materijali</title>
</head>

<body>

    <div class="container-fluid fixed-top">
        <div class="card text-white bg-dark">
            <h1 class="card-header" style="text-align: center;">Materijali</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card-body">
                    <button type="button" class="btn btn-primary"><a href="panel.php">Nazad</a></button>
                </div>
            </div>
            <div class="col-6" id="materijali-container">
                <?php
                require("./php/dbconnection.php");
                $sql = "SELECT materijali.*, kursevi.Naziv AS kursevi_Naziv, CONCAT(predavaci.Ime, ' ', predavaci.Prezime) AS predavac_ImePrezime 
                FROM materijali 
                JOIN kursevi ON materijali.KursID = kursevi.KursID 
                JOIN predavaci ON materijali.PredavacID = predavaci.PredavacID";
                $rezultat = $mysqli->query($sql);
                while ($rez = mysqli_fetch_assoc($rezultat)) {
                    echo '<div class="card text-white bg-dark">';
                    echo '<div class="card-header">' . $rez["kursevi_Naziv"] . '</div>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Tip Materijala: ' . $rez["Naziv"] . '</h5>';
                    echo '<h5 class="card-title">Predavac: ' . $rez["predavac_ImePrezime"] . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '<p>';
                }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>