
<?php

include_once 'databaza.inc.php';

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$sql = " insert into lajmetSh (ID,Lajmi) values ('$Username', '$Password'); ";
mysqli_query($conn,$sql);

header("Location: ../index.php");
?>