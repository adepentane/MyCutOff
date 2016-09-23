<?php
#-- Connection db to shit
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "myapp";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
