
<?php

include_once 'databaza.inc.php';

$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$Kerkesa = $_POST['Kerkesa'];


$sql = " insert into kerkesat (Emri,Mbiemri,Email,Kerkesa) values ('$Name', '$Surname' , '$Email' , '$Kerkesa'); ";
mysqli_query($conn,$sql);

header("Location: ../index.php");
?>