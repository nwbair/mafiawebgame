<?php

session_start();
ob_start();

$mysqli_server = "localhost";
$mysqli_user = "root";
$mysqli_password = "";

$mysqli_database = "mafia";

$connection = mysqli_connect("$mysqli_server", "$mysqli_user", "$mysqli_password", "$mysqli_database");

if(!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>