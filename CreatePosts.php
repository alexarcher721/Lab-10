<?php
$servername = "cycle3.eecs.ku.edu";
$username = "a721a232";
$password = "-------"; //actual password will be used
$dbname = "a721a232";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$post_id = $_POST['post_id'];
$content = $_POST['content'];
$author_id = $_POST['author_id];
$sql = "INSERT INTO Users (post_id,content,author_id)
VALUES (post_id,content,author_id)";
$conn->close();
?>
