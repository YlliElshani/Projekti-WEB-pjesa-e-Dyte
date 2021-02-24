<?php

$dbServerName;
$dbUsername;
$dbPassword;
$dbName;

$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'lajmetSh';

class databaza {

public function __construct () {

$this->dbServerName = "localhost";
$this->dbUsername = "root";
$this->dbPassword = "";
$this->dbName = "databaza";

$conn = new mysqli($this->dbServerName, $this->dbUsername, $this->dbPassword, $this->dbName);


return $conn;







}

}

?>