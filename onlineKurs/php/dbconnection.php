<?php 

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "onlinekurs";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli -> connect_error){
    die("Error : (" . $this->$mysqli->connect_error . ") " . $this->$mysqli->connect_error);
}






?>