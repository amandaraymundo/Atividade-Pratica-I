<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sup_tecnico";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die ("Erro na conexão! <br> " . $conn->connect_error); 
}
?>