<?php 

include("dbconnection.php");

$ime = $_REQUEST['ime'];
$prezime = $_REQUEST['prezime'];
$email = $_REQUEST['email'];
$kursID = $_REQUEST['kursID'];

if(!empty($ime) && !empty($prezime) && !empty($email) && !empty($kursID)){
    $statement = $mysqli->prepare("INSERT INTO polaznici(Ime, Prezime, Email, KursID) VALUES (?, ?, ?, ?)");

    $statement->bind_param("ssss", $ime, $prezime, $email, $kursID);

    if($statement->execute()){
        header("Location: ../noviPolaznik.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>