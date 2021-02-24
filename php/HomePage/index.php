<?php 
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
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
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\WEBProjektiReDesignMAIN\CSS files\About us style.css">
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\WEBProjektiReDesignMAIN\CSS files\Homepage style.css">
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\WEBProjektiReDesignMAIN\CSS files\Home css.css">
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


  	<div id="sliderAuto">
        <script>

        var index=0 ;
        var kohaPerSlide= 3000;
        var fotot = [];

        fotot[0]= 'C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/actBg.jpg'
        fotot[1]='C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/act1.jpg'
        fotot[2]='C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/act2.jpg'
        fotot[3]='C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/act5.jpg'

        function slidePics(){
          document.sliderpics.src = fotot[index];
          if(index<fotot.length - 1){

            index++;

          }
          else{

            index=0;

          }

          setTimeout("slidePics()",kohaPerSlide);
        }
        window.onload = slidePics;

      </script>
    <img name="sliderpics" id="imgCSS" style="filter: invert(0);">
  </div>


      <div class="LinkHere"> 
        <a href="../Produktet/index.php">Shikoni librarin tone!</a>
      </div>

      <div class="TekstBox">
        <h2>
          Faqja jon mundeson shitjen e video-lojrave ne menyre virtuale
        </h2>
        <p>
          Ne faqen ton mund te bleni video-lojerat me te reja ne market permes internetit, menyra se si funksionon eshte permes
          qelsave virtual te lojrave te cilat mund ti perdorni ne Steam per te marr lojen ne librarin tuaj, arsyeja se perse te
          bleni lojera tek ne, ne vend se ti bleni dirket ne Marketin e Steam eshte se ne i shesim me nje discount te ndjeshem ne
          krahasim me &ccedil;mimin standart te vendosur nga Steam dhe nga kompanit e lojrave!
        </p>
      </div>

      <div class="BoxHodlr">
        <div class="LeftBox">
            <img src="C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/hd.jpg" width="400px" height="250px">
            <h3>
              Tek ne mund te gjeni
            </h3>
            <p>
              Curabitur magna lorem, tempus ac ultrices ac, dapibus eu est. Integer iaculis rutrum nunc, id sollicitudin quam facilisis vel. Morbi lacinia enim justo, maximus volutpat mi maximus nec. Vestibulum fringilla lectus ac risus consectetur, ac vehicula ante luctus. Aenean convallis, diam vel semper consectetur, mauris nulla tempus ligula, a iaculis ligula purus sed mauris. Integer dui orci, facilisis nec risus a, luctus eleifend orci. Maecenas viverra pharetra enim vitae accumsan. Integer aliquet porta dapibus. Donec tincidunt augue quis eros commodo, euismod dictum diam finibus. Suspendisse condimentum aliquet est a pellentesque. Proin iaculis sapien elementum dolor malesuada blandit.
            </p>
        </div>

        <div class="RightBox">
          <h3>
            Sherbimet tona jane te sigurta dhe te kualitative
          </h3>
            <p>
              Donec egestas quis lorem eu accumsan. Proin bibendum elit id nulla hendrerit, sed dictum augue volutpat. Sed tempus dignissim erat. Donec porta sem lectus, eget tempus nibh porttitor et. Morbi cursus elit ut enim tempor tempus. Cras non urna dui. Nam suscipit varius euismod. Praesent eget imperdiet mi. Proin commodo pellentesque eleifend. Donec ut dolor scelerisque, tincidunt mauris eu, tincidunt urna. Cras dignissim lectus eget elit scelerisque, et facilisis massa dignissim.
            </p>
          <img src="C:/xampp/htdocs/WEBProjektiReDesignMAIN/Foto/8bitGif.gif" width="400px" height="250px">
        </div>
      </div>


      <div class="Show">
          <h2>
            Ne faqen tone ju mundeni
          </h2>
         <a href="#">Te shikoni lajmet me te reja ne boten e video-lojrave</a>
         <br>
         <br>
         <br>
         <a href="#">Te keni nje menyr te sigurt te blerjes se lojrave</a> 
         <br>
         <br>
         <br>
         <a href="#">Te shikoni produktet tona te promovuara</a>
         <br>
         <br>
         <br>
         <a href="#">Te krijoni nje llogari dhe te merrni rekomandime ne email</a>
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