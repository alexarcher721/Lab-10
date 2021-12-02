<?php
$mysqli = new mysqli("cycle3.eecs.ku.edu", "a721a232", "-----", //Actual password will be used
"a721a232");
/* check connection */
if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}
$post_id = $_POST['post_id'];
$content = $_POST['content'];
$author_id = $_POST['author_id];
$sql = "INSERT INTO Users (post_id,content,author_id)
VALUES (post_id,content,author_id)";
/* free result set */
$result->free();
}
/* close connection */
$mysqli->close();
?>
