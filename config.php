<?php
$servername = "localhost"; // or your database server IP
$username = "root"; // your database username
$password = "1234"; // your database password
$database = "CONVO"; // your database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
