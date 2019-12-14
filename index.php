<?php
// Initialize the session
session_start();
 
//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontPage</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <div class="container">
        <a class="active" href="#home">HOME
            <img src="images/icons/home_large_icon.png" alt="" width="20px",height="20px">
        </a>
        <a href="create.html">CREATE</a>
        <div class="dropdown">
        <a href="#register"><img src="images/icons/avatar.png" alt="" class="avatar"></a>
        <div class="dropdown-content">
            <a href="login.php">LOGIN</a>
            <a href="register.php">SIGNUP</a>
            <a href="logout.php">LOGOUT</a>
        </div>
        </div>
        <a href="about.html">ABOUT US</a>
    </div>
      
      <div style="padding-left:16px" class="container-2">
        <img src="morsecode/explearn.JPG" alt="" style="border-radius:60px;margin-left:auto;margin-right: auto;display:block" width="400px">
        <h3 align="center"><i>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</i></h3>
        <h1><i>Explearn</i></h1>
        <h3><i>&#8226 Simple,free and interactive website to explore anything with fun filled mini courses!</i></h3>
        <h3><i>&#8226Gamification poured into every mini course!</i></h3>
        <h3><i>&#8226Learning with explearn infun and addictive!</i></h3>
        <div class="slideshow-container">
            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
                    <a href="morse.html"><img src="morsecode/morse_front.JPG" style="width:100%;height: 500px;border-radius: 20px;height: 400px;"></a>
            </div>
                
            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                  <a href="colour.html"><img src="morsecode/colours_front.JPG" style="width:100%;border-radius: 20px;height: 400px;"></a>
            </div>
                
            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                  <a href="create.php"><img src="morsecode/indian_states.JPG" style="width:100%;border-radius:20px;height: 400px;"></a>

            </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
        </div>
                <br>
                
                <!-- <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>     -->
      </div>
    <script src="main.js"></script>
</body>
</html>