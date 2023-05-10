<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "visitjaybee";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Succesful</title>
</head>
<body>
	<h2>Succesful</h2>
</body>
</html>