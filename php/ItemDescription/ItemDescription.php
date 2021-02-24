<?php
session_start();

echo $_SESSION['Name'];



?>





<!DOCTYPE html>
<html>
<head>
  <title>Item Description</title>
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\WEBProjektiReDesignMAIN\CSS files\About Us Style.css">
  <link rel="stylesheet" type="text/css" href="Item Description Style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

</head>




<body>
<div class="nav">
        <div class="logo">
            Epic Games
        </div>
            <ul class="links">
                <li>
                    <a href="../LoginForma/index.php">Log in</a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
    </div>
      <div class="outerBox">
          <div class="ImgOut">
           <?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'fotot';

$result = $mysqli->query("Select * From $table where Name like '9 image' ");
while ($data = $result->fetch_assoc()){
  echo "<img src='{$data['Location']}'>";


}


?>
          </div>
          <div class="prodDesc">
              <h2>
                Titulli Lojes
              </h2>
              <p>
                Pershkrim i shkurter i lojes,Cras mattis viverra neque ornare malesuada. Proin imperdiet pellentesque nulla et facilisis. Fusce lobortis sem quam, sed iaculis est porttitor non. Pellentesque massa orci.
              </p>
              <div class="priceStyle">
                <p>
                  &Ccedil;mimi: 32&euro;
                </p>
              </div>
              <div class="formPageses">
                <h3>
                  Zgjidh menyren e pageses dhe vazhdo
                </h3>
                <form>
                  <select>
                    <option>
                      Credit Card
                    </option>
                    <option>
                      Bitcoin
                    </option>
                    <option>
                      Debit Card
                    </option>
                  </select>
                  <br>
                  <br>
                   <?php 

if ($_SESSION['Name'] == '')
{
    echo 'You must be loged in';
}
 else{

      
     echo "<input type='submit'  id='button' class='cart-btn' name='submit' value='Buy' onclick='validate();'>";
     }
      ?>
                  <h3>
                    Duke vazhduar ju pajtoheni me Termat dhe Kushtet tona
                  </h3>
                </form>
              </div>
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

 <script>
function validate() {
         window.location.href="index.php";
       }
     </script>