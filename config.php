<?php
$currency = '₹';
$db_username = 'root';
$db_password = '1234'; // Use the password you set
$db_name = 'CONVO';
$db_host = 'localhost';

// Establish connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Corrected here
}
?>
