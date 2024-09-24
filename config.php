<?php
$currency = '₹';
$db_username = 'root';
$db_password = '1234'; // Use the password you set
$db_name = 'CONVO';
$db_host = 'localhost';
$conn = new mysqli("localhost", "root", "1234", "CONVO");


// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
