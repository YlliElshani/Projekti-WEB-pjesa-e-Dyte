
<?php

session_start();

$_SESSION['Name'] = "Loged In";
echo $_SESSION['Name'];





define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'databaza');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['Username']);
    $password = mysqli_real_escape_string($con,$_POST['Password']);

 $_SESSION ['name'] = $uname;
        echo $_SESSION ['name'];

    if ($uname != "" && $password != ""){


        $sql_query = "select count(*) as cntUser from loginforma where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['Username'] = $uname;
            header("location:../HomePage/index.php");
        }else{
            header("location:error.php");
        }

    }
    if ($uname == "Admin"){
        header("location:admin.php");
    }

}

?>





<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>
            Epic Games
        </title>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Raleway:wght@100&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
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
                    <a href="ItemDescription.php">Products</a>
                </li>
            </ul>
    </div>
 <div class="LoginContainer">
        <div class="FotoLeft">
            <img src="C:\Users\HP\Desktop\WEBProjektiReDesignMAIN\Foto\Free_Sample_By_Wix-removebg-preview.png" id="image">
        </div>
        <div class="FormRight">
            <form class="FormA" method="POST">
                <h2>
                    Log In
                </h2>
                <div class="TextBox">
                    <label><input type="text" name="Username" placeholder="Email" id="emailInput"></label>
                    <label><input type="text" name="Password" placeholder="Password" id="passwordInput"></label>
                </div>
                <button type="submit"  id="button" class="btn" name="submit"  onclick="validate();">
                    Submit
                </button>
                <br>
                <h2>
                    Dont have an account?
                </h2>
                <br>
               
            </form>
        </div>
    </div>
    <div id="slide-bar">
            <h1 id="game-style-title">
                Game Your whole Life
            </h1>
        </div>
        <div class="Card1">
                <h3 align="center">
                    Eksploroni Me ne!
                </h3>
                <div class="Card1Tex">
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis.
                    </p>
                </div>  
            </div>   
        </div>
            <div class="Card2">
                    <h3 align="center">
                        Gjeni &ccedil;mimet me te mira
                    </h3>
                <div class="Card2Tex">
                    <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis.
                    </p>
                </div>  
            </div>  
            <div class="Card3">
                <h3 align="center">
                    Eksploroni Me ne!
                </h3>
                <div class="Card3Tex">
                    <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis.
                 </p>
             </div>  
        </div>
            <div class="Card4">
                 <div class="FooterText">
                    <h1>
                        <a href="Rreth nesh.html" style="font-family: 'Open Sans Condensed', sans-serif;text-decoration: none;letter-spacing: 0.5px;margin-top: 20px;"></a>
                    </h1>
                </div> <!--Fundi i tekstit ne anen e majt FLEX-->

                
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
        function validate() {
            var username = document.getElementById("emailinput").value;
            var password = document.getElementById("passwordinput").value;
            if (username == null || username == "") {
                alert("Please enter the username.");
                return false;
            }
            if (password == null || password == "") {
                alert("Please enter the password.");
                return false;
            }
            alert('Login successful');
        } 
</script>