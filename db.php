<?php
$servername = "localhost";  // Your server name
$username = "root";         // Your MySQL username
$password = "smit666";             // Your MySQL password
$dbname = "classic_reviews";      // The name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
