<?php
// Database configuration
$servername = "localhost"; // or the IP address of the MySQL server
$username = "root";
$password = "";
$dbname = "shopee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set the charset to utf8mb4 for better UTF-8 support
$conn->set_charset("utf8mb4");
?>
