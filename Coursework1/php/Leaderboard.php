<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Leaderboard");
    outputBannerNavigation("Leaderboard");
?>

<!-- Contents of the page (Same body and comments code from LeaderboardPage.html) -->

<script src="../js/LeaderBoard.js"></script>
<div class="leaderboardBox"><!--the div after navigation for the background of the leaderboardBox-->
            <h1 class="LeaderboardHeading">LEADERBOARD</h1><!--inside the div and inside the box is this heading which is styled in the CSS with the class name-->
            <table class="leaderboardTable" id="jsLeaderboard"><!--Table is made here(we use example values)-->
                <tr >
                  
                   <th width="10%">NO.</th>
                  <th>NAME</th>
                  <th>SCORE</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>kk</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>sk</td>
                  <td>300</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>milan</td>
                    <td>200</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>kurt</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>sindhu</td>
                    <td>100</td>
                  </tr> 
              </table>
            <br>
        </div>
<br>

<?php
    //Output the footer with the function
    outputFooter();
?>