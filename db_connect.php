<?php
$servername = "localhost"; // Change if your MySQL server is hosted elsewhere
$username = "username"; // Replace with your MySQL username
$password = "password"; // Replace with your MySQL password
$dbname = "client_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
