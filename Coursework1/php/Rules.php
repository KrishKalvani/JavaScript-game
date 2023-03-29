<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Rules");
    outputBannerNavigation("Rules");
?>

<!-- Contents of the page (Same body code, comments from RulesPage.html) -->
<div class="RulesBox"><!--the 2nd div is the background box of the rules content of where the information will be in-->
            <h1 class="RulesHeading">RULES</h1><!--heading "RULES" which will be styled in the CSS-->
            <br>
            
            <ol class="RulesContent">
                <li>Shoot every meteor coming your way in order to protect earth from destruction. </li><br><br>
                <li>User has to use left, right arrow keys to move horizontally. The spacebar to shoot the meteors. User gets 50 points per meteor shot.</li><br><br>
                <li>Do not let any one of them get past you.</li><br><br>
                <li>If any meteor bypasses the rocket, game over. </li><br><br>
                <br>
                
                <br>
            
        </div>
        <br>

<?php
    //Output the footer
    outputFooter();
?>