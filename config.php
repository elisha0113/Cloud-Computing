<?php
$currency = '₹';
$db_username = 'root';
$db_password = '1234'; // Use the password you set
$db_name = 'bolt';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
