<?php

$servername = "localhost";
$username = "kantinba_kantin";
$password = "gccOP8M09L";
$db = "kantinba_kantinbangau";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
