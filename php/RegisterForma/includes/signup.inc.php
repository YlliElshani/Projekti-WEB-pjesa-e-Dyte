
<?php

include_once 'databaza.inc.php';

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$sql = " insert into loginforma (Username,Password) values ('$Username', '$Password'); ";
mysqli_query($conn,$sql);

header("Location: ../index.php");
?>