<?php
$servername = "localhost"; // or your database server IP
$username = "your_username"; // your database username
$password = "your_password"; // your database password
$database = "your_database"; // your database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
