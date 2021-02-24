
<?php


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
	<title>KategoriA</title>
	<link rel="stylesheet" type="text/css" href="KategoriCSS.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
</head>
<body>
	<div class="nav">
		<div class="logo">
			Epic Games
		</div>
			<ul class="links">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="">About</a>
				</li>
				<li>
					<a href="">News</a>
				</li>
				<li>
					<a href="">Products</a>
				</li>
			</ul>
	</div>
	<div class="KategoriBoxCont">
		<div class="TexShow">
			<h1>
				Lojerat nga zhanri Aksion
			</h1>
		</div>
		<div class="KategoriBox">
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
	                    <a href="#">

					<?php
	               $result = $mysqli->query("Select * From $table1 where ID like '1' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?>



	                    </a>
	                </h1>
	                <p class="UnderText1">
	                    <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '1' ");
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
	               $result = $mysqli->query("Select * From $table1 where ID like '2' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText2">

	                   <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '2' ");
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
	               $result = $mysqli->query("Select * From $table1 where ID like '3' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText3">
	                   <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '3' ");
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
	               $result = $mysqli->query("Select * From $table where Name like '6 image' ");
					while ($data = $result->fetch_assoc()){
 					 //echo "<h2>{$data['Name']}</h2>";
 					 echo "<img src='{$data['Location']}'>";

					}             
					?>              
	            </div>
	            <div class="Text4">
	                <h1>
	                    <a href="#"><?php
	               $result = $mysqli->query("Select * From $table1 where ID like '4' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText4">
	                    <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '4' ");
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
	               $result = $mysqli->query("Select * From $table where Name like '6 image' ");
					while ($data = $result->fetch_assoc()){
 					 //echo "<h2>{$data['Name']}</h2>";
 					 echo "<img src='{$data['Location']}'>";

					}             
					?>              
	            </div>
	            <div class="Text5">
	                <h1>
	                    <a href=""><?php
	               $result = $mysqli->query("Select * From $table1 where ID like '5' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText5">
	                    <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '5' ");
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
	               $result = $mysqli->query("Select * From $table where Name like '6 image' ");
					while ($data = $result->fetch_assoc()){
 					 //echo "<h2>{$data['Name']}</h2>";
 					 echo "<img src='{$data['Location']}'>";

					}             
					?>              
	            </div>
	            <div class="Text6">
	                <h1>
	                    <a href="#"><?php
	               $result = $mysqli->query("Select * From $table1 where ID like '6' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText6">
	                    <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '6' ");
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
	                    <a href="#"><?php
	               $result = $mysqli->query("Select * From $table1 where ID like '7' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText7">
	                    <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '7' ");
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
	                    <a href="#"><?php
	               $result = $mysqli->query("Select * From $table1 where ID like '8' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Emri']}</h9>";
 					

					}             
					?></a>
	                </h1>
	                <p class="UnderText8">
	                   <?php
	               $result = $mysqli->query("Select * From $table2 where ID like '8' ");
					while ($data = $result->fetch_assoc()){
 					 echo "<h9>{$data['Cmimi']}</h9>";
 					

					}             
					?>
	                </p>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="contSlide">
		<div class="slider">
			<div class="slideItems">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act4.jpg" id="last">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act1.jpg">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act2.jpg">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act5.jpg">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act4.jpg">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\act1.jpg" id="first">
			</div>
		</div>
		<div class="Btns">
			<button id="mbasBtn">Mbas</button>
			<button id="paraBtn">Para</button>
		</div>
	</div>
	<script type="text/javascript" src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\JS files\KategoriJS.js"></script>
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