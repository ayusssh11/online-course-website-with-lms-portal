<?php
$host = 'localhost';
$user = 'root'; // Database username
$password = ''; // Database password
$dbname = 'my_lms';

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
