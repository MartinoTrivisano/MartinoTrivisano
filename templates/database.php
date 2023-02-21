<?php
session_start();
$hostname ="" ;
$usernaame = "dashboard";
$password = "CoTareg98!";
$databaseName = "my_dashboard";
$conn = mysqli_connect($hostname, $usernaame, $password, $databaseName);

if($conn -> connect_error){
    die("Connessione fallita:" . $conn->connect_error);
}

?>