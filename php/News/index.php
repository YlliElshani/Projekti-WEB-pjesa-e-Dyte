

    


<!DOCTYPE html>
<html>
<head>
	<title>News</title>
    <link rel="stylesheet" href="News style.css">
	<link rel="stylesheet" type="text/css" href="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\CSS files\News style.css">
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
		<div class="flexUp">
			<div class="Kutija1">
				<h2>
					<a href="#">Lajmi Kryesor</a>
				</h2>
				<?php




$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "databaza";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$mysqli = new mysqli ('localhost','root','','databaza');
$table = 'lajmet1';



$result = $mysqli->query("Select * From $table where ID = '1' ");
while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
 

}
?>
			</div>
			<div class="Kutija2">
				<h2>
					<a href="#">Lajme2</a>
				</h2>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,qui ratione voluptatem sequi nesciunt
				</p>
			</div>
			<div class="Kutija3">
				<h2>
					<a href="#">Lajme3</a>
				</h2>
				<p>
					At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,qui ratione voluptatem sequi nesciunt.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,qui ratione voluptatem sequi nesciunt.usto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
				</p>
			</div>
		</div>
		<div class="flexDown">
			<div class="MiniKutija1">
				<h3>
					<a href="#">LajmeSekondare1</a>
				</h3>
							<?php


$result = $mysqli->query("Select * From $table where ID = '2' ");
while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
 

}
?>
			</div>
			<div class="MiniKutija2">
				<h3>
					<a href="#">LajmeSekondare2</a>
				</h3>
						<?php


$result = $mysqli->query("Select * From $table where ID = '3' ");
while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
 

}
?>
			</div>
			<div class="MiniKutija3">
				<h3>
					<a href="#">LajmeSekondare3</a>
				</h3>
							<?php


$result = $mysqli->query("Select * From $table where ID = '4' ");
while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
 

}
?>
			</div>
			<div class="MiniKutija4">
				<h3>
					<a href="#">LajmeSekondare4</a>
				</h3>
							<?php


$result = $mysqli->query("Select * From $table where ID = '5' ");
while ($data = $result->fetch_assoc()){
  echo "<p>{$data['Lajmi']}</p>";
 

}
?>
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