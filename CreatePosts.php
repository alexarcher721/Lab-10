<?php
$mysqli = new mysqli("cycle3.eecs.ku.edu", "a721a232", "-----", //Actual password will be used
"a721a232");
/* check connection */
if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

/* free result set */
$result->free();
}
/* close connection */
$mysqli->close();
?>
