<?php
$servername = "localhost";
$username = "rafli";
$password = "Rafli875";
$dbname = "f12022";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>