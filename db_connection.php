<?php
$servername = "localhost";  // Replace with your server details
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "emergency";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
