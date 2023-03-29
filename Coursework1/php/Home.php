<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Home");
    outputBannerNavigation("Home");
?>

<!-- Contents of the page (same body code and comments from HomePage.html) -->



<img class="cloud1" src="../imgs/cloudsPng.png"><!--clouds on the right side-->
<img class="cloud2" src="../imgs/clouds2.png"><!--clouds on the left side-->
<img class="meteor1" src="../imgs/meteors.png"><!--both these meteors are same, the one on the left side of the home page is flipped horizontally-->
<img class="meteor2" src="../imgs/meteors.png">
<img class="Logo" src="../imgs/RocketWithTitle3.png"><!--Below navigation bar, the main content i.e., rocket picture and its title-->
<button class="registerButton" onclick="window.location.href='Register.php'"><!--Register button which leads to the register-->
            REGISTER
        </button>
        <button class="loginButton" onclick="window.location.href='Login.php'"><!--Login button which leads to the login page-->
            LOGIN
        </button>






<?php
    //Output the footer with the function
    outputFooter();
?>