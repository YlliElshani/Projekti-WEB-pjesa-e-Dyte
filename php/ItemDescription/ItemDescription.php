<?php
session_start();


if ($_SESSION['name'] == '')
{
    echo 'the session is empty';
}
session_destroy();


?>





<!DOCTYPE html>
<html>
<head>
  <title>Item Description</title>
  <link rel="stylesheet" type="text/css" href="About Us Style.css">
</head>
<body>
  <div class="HeaderMain">
         <div class="HeaderMainTex">
            <h3>
                Epic Games
            </h3>
        </div>
            <div id="navbar">
                <ul>
                    <li class="lista-navbar"><a href="####" class="linkP">Home</a></li>
                </ul>
                <ul>
                    <li class="lista-navbar"><a href="####" class="linkP" >About Us</a></li>
                </ul>
                <ul>
                    <li class="lista-navbar"><a href="####"class="linkP" >Register</a></li>
                </ul>
        </div>
    </div>
  <div class="container2">
 

  
  <div class="Fotoja">
    <?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'fotot';

$result = $mysqli->query("Select * From $table");
while ($data = $result->fetch_assoc()){
  echo "<h2>{$data['Name']}</h2>";
  echo "<img src='{$data['Location']}'>";

}


?>
    <img data-image="red" class="active" src="" >
  </div>
 
 <link rel="stylesheet" type="text/css" href="Item Description Style.css">
  <!-- Right Column -->
  <div class="right-column">
  <div class="OuterBorder">
    
  </div>
    <!-- Product Description -->
    <div class="product-description">
      <h3> CD </h3>
      <h1>Call of Duty</h1>
      <p>One of the most realistic war games there is. With a vareity of wepons and maps. Play gagainst others online</p>
    </div>
 
    <!-- Product Configuration -->
    <div class="product-configuration">
 
     <span>Type</span>
 
        <div class="cable-choose">
          <button>Blac Ops 2</button>
          <button>Modern Warfare</button>
          <button>Black Obs 3</button>
        </div>
 
      <!-- Cable Configuration -->
      <div class="cable-config">
        <span>Device configuration</span>
 
        <div class="cable-choose">
          <button>Play Station</button>
          <button>Xbox</button>
          <button>PC</button>
        </div>
 
         <p > A first-person shooter video game based on id Tech 3, and was released on October 29, 2003. The game was developed by Infinity Ward and published by Activision.</p>
      </div>
    </div>
 
    <!-- Product Pricing -->
    <form class="product-price" method="POST" >
      <span>50$</span>
      <input type="submit"  id="button" class="cart-btn" name="submit" value="Buy" onclick="validate();">

    </form>
  </div>
</div>

 <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Sites</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">Home Page</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Payment Methods</h4>
          <ul>
            <li><a href="#">Credit Card</a></li>
            <li><a href="#">Cash</a></li>
            <li><a href="#">Bitcoin</a></li>
            <li><a href="#">PayPal</a></li>
            <li><a href="#">MasterCard</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Email</a></li>
            <li><a href="#">Fax</a></li>
            <li><a href="#">Website</a></li>
          </ul>
        </div>
        
      </div>
     </div>
  </footer>

</body>
</html>

