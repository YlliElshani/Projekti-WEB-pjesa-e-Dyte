<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'loginforma';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
</head>
<body>

	<h1>Keta jane userat</h1>
	<?php 

$result = $mysqli->query("Select * From $table");
while ($data = $result->fetch_assoc()){
  echo "<h2>{$data['Username']}</h2>";

}


	?>
</body>
</html>