<?php

include "config.php";

if (isset($_POST['name'])){

$sender = $_POST['name'];
$message = $_POST['message'];

echo $sender . " " . $message . "<br>";

$sql_statement = "INSERT INTO messages(sender,message)
					VALUES ('$sender','$message')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index.php");

}

else
{

	echo "The form is not set.";

}


?>