<?php
include 'db_connect.php'; // Include the database connection script

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO clients (name, email, phone, address)
        VALUES ('$name', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
