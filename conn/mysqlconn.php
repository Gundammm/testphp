<?php
$servername = "plearnjai.com";
$username = "plearnja_cpsu8";
$password = "08c0LcUa7b";
$dbname = "plearnja_cpsu8";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>