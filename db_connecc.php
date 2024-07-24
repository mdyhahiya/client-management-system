<?php
include 'db_connect.php'; // Include the database connection script

$id = $_GET['id'];

$sql = "DELETE FROM clients WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
