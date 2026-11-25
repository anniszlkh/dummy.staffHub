<?php
$servername = "localhost";
$username = "skynueco_dbuser";
$password = "senhon228!@";
$dbname = "skynueco_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully!";
?>