
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 768px) and (max-device-width: 1024px) and(-webkit-min-device-pixel-ratio: 2)" href="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\CSS files\contactstyle.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
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
                    <a href="">News</a>
                </li>
                <li>
                    <a href="">Register</a>
                </li>
            </ul>
    </div>
    <div class="ClipDiv">
    	<h1>
    		Na kontaktoni!
    	</h1>
    	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
    		<path fill="#fff" fill-opacity="1" d="M0,64L48,101.3C96,139,192,213,288,250.7C384,288,480,288,576,256C672,224,768,160,864,117.3C960,75,1056,53,1152,37.3C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    	</svg>
    </div>
    <div class="mainC">
    	<h2>
    		Per &Ccedil;do ankese ose sygjerime ju mund te na kontaktoni!
    	</h2>
    	<ul>
    		<li>
    			Email:EpicGamesKS@info.com
    		</li>
    		<li>
    			+383 49 125 504
    		</li>
    		<li>
    			Instagram <a href="#">@EpicGamesKS</a>
    		</li>
    		<li>
    			Facebook <a href="#">EpicGamesKS</a>
    		</li>
    	</ul>
    </div>
    <div class="downC">
    	<div class="FotoLeft">
    		<img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\placeholder3.png" width="300px" height="400px">
    	</div>
	    <div class="formSend">
	    	<h3>
	    		Per &ccedil;do kerkes tjeter mund te plotsoni formen!
	    	</h3>
	    	<form class="formA" method="POST" action = "includes/signup.inc.php">
	    		<label><input type="text" name="Name" placeholder="Emri"></label>
	    		<label><input type="text" name="Surname" placeholder="Mbiemri"></label>
	    		<label><input type="text" name="Email" placeholder="Email"></label>
	    		<label><input type="tel" name="" placeholder="Nr.Telefonit"> </label>
	    		<textarea class="txt" name="Kerkesa">
	    			Shkruani kerkesen tuaj ketu
	    		</textarea>
	    		<button type="submit" name="submit" onclick="validate();">
                    Submit
                </button>
	    	</form>
	    </div>
    </div>
    <footer class="footer">
     <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Sites</h4>
                <ul>
                    <li><a href="#">Home Page</a></li>
                    <li><a href="#">News</a></li>
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
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Homepage</a></li>
                </ul>
            </div>
            
        </div>
     </div>
  </footer>
</body>
</html>


