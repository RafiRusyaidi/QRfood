<?php
$servername = "localhost";  // Usually "localhost"
$username = "root";         // MySQL username, usually "root" for local development
$password = "";             // MySQL password, usually empty for local development
$dbname = "order";          // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
