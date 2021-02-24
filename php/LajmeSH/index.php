
<?php
include 'includes/databaza.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>LajmeSh</title>
	<link rel="stylesheet" type="text/css" href="LajmeSh.css">
	<link rel="stylesheet" type="text/css" href="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\CSS files\About us style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="">
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
	<div class="MainC">
		<div class="UpperC">
			<div class="Fotoja">
				<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\placeholder2.jpg"><!--  width="325px" height="500px"  -->
			</div>
			<div class="Tex">
				<h1>
					Titulli Artikullit
				</h1>

				
				<p>

<?php
				$result = $mysqli->query("Select * From $table where ID = '1' ");
	while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
    echo "<p>{$data['Lajmi']}</p>";
    echo "<p>{$data['Lajmi']}</p>";
 

}
?>
				</p>
			</div>
		</div>	
	</div>
			<div class="flexDown">
			<div class="MiniKutija1">
				<h3>
					<a href="#">LajmeSekondare1</a>
				</h3>
				<p>
					<?php
				$result = $mysqli->query("Select * From $table where ID = '2' ");
	while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";

 

}
?>
				</p>
			</div>
			<div class="MiniKutija2">
				<h3>
					<a href="#">LajmeSekondare2</a>
				</h3>
				<p>
									<?php
				$result = $mysqli->query("Select * From $table where ID = '3' ");
	while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";

 

}
?>
				</p>
			</div>
			<div class="MiniKutija3">
				<h3>
					<a href="#">LajmeSekondare3</a>
				</h3>
				<p>
									<?php
				$result = $mysqli->query("Select * From $table where ID = '4' ");
	while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";

 

}
?>
				</p>
			</div>
			<div class="MiniKutija4">
				<h3>
					<a href="#">LajmeSekondare4</a>
				</h3>
				<p>
									<?php
				$result = $mysqli->query("Select * From $table where ID = '5' ");
	while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";

 

}
?>
				</p>
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