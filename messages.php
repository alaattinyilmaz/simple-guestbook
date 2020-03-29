<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> ID </th> <th> SENDER </th> <th>MESSAGE</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM messages";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['id'];
  $mysender = $row['sender'];
	$message = $row['message'];

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $mysender . "</th>" . "<th>" . $message . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>