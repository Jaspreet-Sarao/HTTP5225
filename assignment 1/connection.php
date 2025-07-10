<?php
$servername = "localhost";
$username = "root";
$password = ""; // Change if needed
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
