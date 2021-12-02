<?php
$servername = "cycle3.eecs.ku.edu";
$username = "a721a232";
$password = "-------"; //actual password will be used
$dbname = "a721a232";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$userid = $_POST['user_id'];
$sql = "INSERT INTO Users (user_id)
VALUES (userid)";

$conn->close();
?>
