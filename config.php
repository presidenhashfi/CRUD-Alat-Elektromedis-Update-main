<?php
$databaseHost = 'localhost'; 
$databaseName = 'simrs';
$databaseUsername = 'root';
$databaseport = 8111; // Port default MySQL
$databasePassword = ''; // atau isikan sesuai password MySQL kamu

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databaseport);
?>
