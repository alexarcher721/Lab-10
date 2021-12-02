<?php
$mysqli = new mysqli("cycle3.eecs.ku.edu", "a721a232", "queW7Tuj",
"a721a232");
/* check connection */
if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}
$userid = $_POST['user_id'];
$sql = "INSERT INTO Users (user_id)
VALUES (userid)";
/* free result set */
$result->free();
}
/* close connection */
$mysqli->close();
?>
