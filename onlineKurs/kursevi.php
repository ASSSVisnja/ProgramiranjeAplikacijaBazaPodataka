<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Kursevi</title>
</head>

<body>

    <div class="container-fluid fixed-top">
        <div class="card text-white bg-dark">
            <h1 class="card-header" style="text-align: center;">Kursevi</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card-body">
                    <button type="button" class="btn btn-primary"><a href="panel.php">Nazad</a></button>
                </div>
            </div>
            <div class="col-9">
                <table class="table table-bordered table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">Opis</th>
                            <th scope="col">Trajanje</th>
                            <th scope="col">Cena</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("./php/dbconnection.php");
                        $sql = "SELECT * FROM kursevi";
                        $rezultat = $mysqli->query($sql);
                        while ($rez = mysqli_fetch_assoc($rezultat)) {
                            echo '<tr>';
                            echo '<td>' . $rez["Naziv"] . '</td>';
                            echo '<td>' . $rez["Opis"] . '</td>';
                            echo '<td>' . $rez["Trajanje"] . '</td>';
                            echo '<td>' . $rez["Cena"] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>