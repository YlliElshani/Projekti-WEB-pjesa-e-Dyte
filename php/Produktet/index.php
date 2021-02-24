<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'fotot';
$table1 = 'emrat';
$table2 = 'cmimet';



?>



<!DOCTYPE html>
<html>
<head>
	<title>HomePage Main</title>
    <link rel="stylesheet" type="text/css" href="Homepage style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="C:\xampp\htdocs\WEBProjektiReDesignMAIN\JS files\JSperHomepageNavbar.js"></script>
</head>
<body>
	<div class="nav">
        <div class="logo">
            Epic Games
        </div>
            <ul class="links">
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
    </div>
    <div class="curved-div">
      <h1>Eksploroni Boten e Video-lojrave me ne</h1>
      <svg viewBox="0 0 1440 319">
        <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>  
        <div class="NavBar" id="NavBarID">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Rreth nesh</a>
            <a href="#">Te reja</a>
            <a href="#">Kerko librarin</a>
            <a href="#">Contact</a>
        </div>
        <div class="SideNavOpen">
            <button class="ButonSideNav">
                <span onclick="openNav()"><h1>
                    >
                </h1></span>                                       
            </button>
        </div>
        <div class="TekstPromovues1">
            Lojera me &ccedil;mime speciale
        </div>
            <div class="KutijaFlex1">
                <div class="Loja1">
                    <div class="Foto1P">
                        <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                 
                    </div>
                    <div class="TextP1">
                        <a href="../ItemDescription/ItemDescription.php">

                            <?php
                   $result = $mysqli->query("Select * From $table1 where ID like '1' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?>
                        
                    </a>   
                        <h4>
                           <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '1' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                        </h4>
                            <p>
                            Rating 4.2/5
                        </p>
                    </div>
                </div>
                <div class="Loja2">
                    <div class="Foto2P">
                        <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                  
                    </div>
                    <div class="TextP2">
                     <p>
                        <a><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '2' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>   
                            </p>
                        <h4 style="font-family: 'Mukta', sans-serif;">
                               <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '2' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                        </h4>
                        <p>
                            Rating 4/5
                        </p>
                    </div>
                </div>
                <div class="Loja3">
                    <div class="Foto3P">
                        <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?> 
                    </div>
                    <div class="TextP3">
                     <p>
                        <a href="#"><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '3' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>   
                            </p>
                        <h4 style="font-family: 'Mukta', sans-serif;">
                               <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '3' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                        </h4>
                         <p>
                            Rating 5/5
                        </p>
                    </div>
                </div>
            </div>
        <div class="TekstPromovues2">
            Lojera te promovuara!
        </div>
    <div class="BorderOut">
        <div class="LojaU1">
            <div class="Foto1">
               <?php
                   $result = $mysqli->query("Select * From $table where Name like '6 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>               
            </div>
            <div class="Text1">
                <h1>
                    <a href="#"><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '4' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>
                </h1>
                <p>
                      <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '4' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU2">
            <div class="Foto2">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '6 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>               
            </div>
            <div class="Text2">
                <h1>
                    <a href="#"><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '5' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>
                </h1>
                <p>
                      <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '5' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU3">
            <div class="Foto3">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '6 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text3">
                <h1>
                    <a href=""><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '6' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>
                </h1>
                <p>
                       <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '6' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU4">
            <div class="Foto4">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text4">
                <h1>
                    <a href="#"><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '7' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>
                </h1>
                <p>
                       <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '7' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU5">
            <div class="Foto5">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text5">
                <h1>
                    <a href=""><?php
                   $result = $mysqli->query("Select * From $table1 where ID like '1' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Emri']}</h9>";
                    

                    }             
                    ?></a>
                </h1>
                <p>
                      <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '8' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU6">
            <div class="Foto6">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '8 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>               
            </div>
            <div class="Text6">
                <h1>
                    <a href="#">NBA 2K21</a>
                </h1>
                <p>
                       <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '1' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?> 
                </p>
            </div>
        </div>
        <div class="LojaU7">
            <div class="Foto7">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '6 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>               
            </div>
            <div class="Text7">
                <h1>
                    <a href="#">GTA V</a>
                </h1>
                <p>
                       <?php
                   $result = $mysqli->query("Select * From $table2 where ID like '2' ");
                    while ($data = $result->fetch_assoc()){
                     echo "<h9>{$data['Cmimi']}</h9>";
                    

                    }             
                    ?>
                </p>
            </div>
        </div>
        <div class="LojaU8">
            <div class="Foto8">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '6 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>               
            </div>
            <div class="Text8">
                <h1>
                    <a href="#">Fallout 4</a>
                </h1>
                <p>
                   &Ccedil;mimi 3&euro; -5%  
                </p>
            </div>
        </div>
    </div>
       
        <div class="KategoriKutit">
            <div class="Kategoria1">
                <h1>
                    <a href="#">Aksion</a>
                </h1>
            </div>
            <div class="Kategoria2">
                <h1>
                   <a href="#">Sport</a>
                </h1>
            </div>
            <div class="Kategoria3">
                <h1>
                   <a href="#">RPG</a>
                </h1>
            </div>
            <div class="Kategoria4">
                <h1>
                   <a href="#">Sandbox</a>
                </h1>
            </div>
        </div>
        <div class="TekstPromovues3">
            Eksploroni librarin ton!
        </div>
            <div class="BorderOut">
        <div class="LojaUU1">
            <div class="Foto1">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                  
            </div>
            <div class="Text1U">
                <h1>
                    <a href="#">Black Ops:Cold War</a>
                </h1>
                <p>
                    &Ccedil;mimi 45&euro; -12% 
                </p>
            </div>
        </div>
        <div class="LojaUU2">
            <div class="Foto2">
                <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text2U">
                <h1>
                    <a href="#"> Gears of War 2</a>                   
                </h1>
                <p>
                    &Ccedil;mimi FREE  
                </p>
            </div>
        </div>
        <div class="LojaUU3">
            <div class="Foto3">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text3U">
                <h1>
                    <a href="#">FIFA 21</a>
                </h1>
                <p>
                    &Ccedil;mimi 52&euro; -14% 
                </p>
            </div>
        </div>
        <div class="LojaUU4">
            <div class="Foto4">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text4U">
                <h1>
                    <a href="#">Borderlands 3</a>
                </h1>
                <p>
                    &Ccedil;mimi 31&euro; -16% 
                </p>
            </div>
        </div>
        <div class="LojaUU5">
            <div class="Foto5">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text5U">
                <h1>
                    <a href="#">CyberPunk 2077</a>
                </h1>
                <p>
                    &Ccedil;mimi 41&euro; -19% 
                </p>
            </div>
        </div>
        <div class="LojaUU6">
            <div class="Foto6">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text6U">
                <h1>
                    <a href="#">Red Dead Redememption 2</a>
                </h1>
                <p>
                    &Ccedil;mimi 38&euro; -32% 
                </p>
            </div>
        </div>
        <div class="LojaUU7">
            <div class="Foto7">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                
            </div>
            <div class="Text7U">
                <h1>
                    <a href="#">Naruto UNS 4</a>
                </h1>
                <p>
                    &Ccedil;mimi 13&euro; -72% 
                </p>
            </div>
        </div>
        <div class="LojaUU8">
            <div class="Foto8">
                 <?php
                   $result = $mysqli->query("Select * From $table where Name like '9 image' ");
                    while ($data = $result->fetch_assoc()){
                     //echo "<h2>{$data['Name']}</h2>";
                     echo "<img src='{$data['Location']}'>";

                    }             
                    ?>                 
            </div>
            <div class="Text8U">
                <h1>
                    <a href="#">Hitman 3</a>                    
                </h1>
                <p>
                    &Ccedil;mimi 12&euro; -90% 
                </p>
            </div>
        </div>
    </div>
    <footer class="footer">
     <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Sites</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">News Page</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Payment Methods</h4>
                <ul>
                    <li><a href="#">Bitcoin</a></li>
                    <li><a href="#">PayPal</a></li>
                    <li><a href="#">Credit Card</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>   
        </div>
     </div>
  </footer>
</body>
</html>