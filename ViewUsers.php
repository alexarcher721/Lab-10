<?php
$mysqli = new mysqli("cycle3.eecs.ku.edu", "a721a232", "-----", //Actual password will be used
"a721a232");
/* check connection */
if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}
$query = "SELECT user_id FROM Users";
$result = mysql_query($query);

echo "<table>";
while($row = mysql_fetch_array($result))
{
echo "<tr><td>" . $row['User ID'] ."</td></tr>
}
echo "</table>";
/* close connection */
$mysqli->close();
</body>
