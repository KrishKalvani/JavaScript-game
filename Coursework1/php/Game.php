<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Game");
    outputBannerNavigation("Game");
?>
 <style>
        body {
      width: 100%;
      overflow: hidden;
      background-color: lightblue;
    }
        #board{
            position: relative;
            top:-5%;
            width:40%;
            height:70%;
            margin:40px auto;
            border: 2px solid white;
            background-color: lightblue;
            overflow: hidden;
        }
        #rocket{
            position: absolute;
            width: 30%;
            height: 10%;
            background: url(../imgs/RocketPic.png);
            background-size: contain;
            background-repeat: no-repeat;
            left:50%;
            bottom: 0px;
            

            
        }
        .bullets {  /*this is being called in the gameTest javascript page*/
      position: absolute;
      bottom: 40px;
      left: 51%;
      width: 20px;
      height: 20px;
      background: url(../imgs/RocketBullet.png);
      background-size: contain;
      background-repeat: no-repeat;
    }
        .meteors{
            position:absolute;
            top:0px;
            width: 50px;
            height:50px;
            background: url(../imgs/GameMeteor.png);
            background-size: contain;
            background-repeat: no-repeat;
        }
        #score { 
      position: absolute;
      top: 0px;
      margin: 7%;
      font-size: 3em;
      color: black;
    }
    #scoreHeading{
        margin-right:90%;
    }
    #startButton{
        position: absolute;
        margin-left:32%;
        margin-top:1%;
        height:6%;
        width:10%;
        background: #5075BD;
        border: 1px solid #000000;
        color:white;
        font-size:100%;

    }
    #startButton:hover{
        background-color: #4a469f;
        color: white;
        cursor: pointer;
    }

    </style>
 <script>
        function loadGame() {
            let body = document.getElementsByTagName('body')[0];
            let script = document.createElement('script');// basically creates the script tags 
            script.type = 'text/javascript';
            script.onload = function () {
                callFunctionFromScript();//when the script fully loads, run the script
            }
            script.src = "../js/gameTest.js";//linking the game here
            body.appendChild(script);//adding the script to the body
        }
    </script>
    
    
    <h1 id="scoreHeading">score:</h1>
    
        <button id="startButton" onclick="loadGame()" >START GAME</button>
        <img id="movingCloud1" src="../imgs/cloudsPng.png">
        <img id="movingCloud2" src="../imgs/clouds2.png">
        <div id="board">
            <div class="meteors"></div>
            <div id="rocket"></div>
        </div>
        
        
        <div id="score">0</div>



<?php
    //Output the footer
    outputFooter();
?>