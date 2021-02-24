<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'loginforma';
$table1 = 'kerkesat';


?>





<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
</head>
<body>
<form class="FormA" method="POST" action = "includes/signup.inc.php">

	 <label><input type="text" name="Username" placeholder="Id" id="emailInput"></label>
     <label><input type="text" name="Password" placeholder="Lajmi Juaj" id="passwordInput"></label>

	<button onclick="validate();">
		
	</button>

	<h1>Keta jane userat me Passwordat e Tyre</h1>
	<?php 

$result = $mysqli->query("Select * From $table");
while ($data = $result->fetch_assoc()){
  echo "<h2>{$data['Username']}</h2>";
  echo "<h2>{$data['Password']}</h2>";
  echo "<br></br>";

}
?>

<h1>Keto Jane Kerkesat e Userave</h1>

<?php
$result = $mysqli->query("Select * From $table1");
while ($data = $result->fetch_assoc()){
  echo "<h2>{$data['Emri']}</h2>";
  echo "<h2>{$data['Mbiemri']}</h2>";
  echo "<h2>{$data['Email']}</h2>";
  echo "<h2>{$data['Kerkesa']}</h2>";
 

}


	?>

</form>
</body>
</html>