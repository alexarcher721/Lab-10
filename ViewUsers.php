<!DOCTYPE html>
<html>
<body>

<?php
$query = "SELECT user_id FROM Users";
$result = mysql_query($query);

echo "<table>";
while($row = mysql_fetch_array($result))
{
echo "<tr><td>" . $row['User ID'] ."</td></tr>
}
echo "</table>";
</body>
</html>
