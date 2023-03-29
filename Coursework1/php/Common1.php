<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link href="../css/styles.css" type="text/css" rel="stylesheet">';
    echo '</head>';
    echo '<body>';
}

/* Outputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<div id="navigation">';
    echo '<img class="navbarLogo" src="../imgs/navbarLogo.png">';
    
    //Array of pages to link to
    $linkNames = array("Home", "Rules", "Game","Leaderboard", "Login", "Register","Profile");
    $linkAddresses = array("Home.php", "Rules.php", "Game.php", "Leaderboard.php", "Login.php", "Register.php","");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){ /*this for loop is counting the navbar contents and checking one after the other*/ 
        if ($linkNames[$x]=="Profile"){/*If the linknames link to Profile then it will make the welcome guest box appear on the navbar */
            /*this echo statement is displaying the welcome guest box*/ 
            echo '<div class="box1"> 
            <p style="color:white"> Welcome Guest </p>
         </div>';
         continue;/*This continues the for loop */
        }
        echo '<a ';
        /*if user selects any page with the names given is linkNames then we initiate the selected class AND if page name is register we initiate 
        selectedRegister as its on the left and it has an underline(same for selectedLogin)*/
        if($linkNames[$x] == $pageName){
            if ($pageName == "Register"){
                echo 'class="selectedRegister"';

            }
            elseif ($pageName == "Login"){
                echo 'class="selectedLogin"';

            }
            echo 'class="selected" ';
        }
        if($linkNames[$x]=="Register"||$linkNames[$x]=="Login"){/*here we are making sure that the register and login navs are on the left with the split class */
            echo 'class="split"';
        }
        
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';// Its displaying which page its own and its calling the appropriate href link between linkaddress and linknames//
    }
    echo '</div>';
}

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '<div class="footer">';
    echo 'Web Page made by Krish Kalvani';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
