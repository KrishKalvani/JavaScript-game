"use strict";
let rocket = document.getElementById("rocket");
let gameBoard = document.getElementById("board");
let position = 0;


setInterval(leftCloud, 100);

function leftCloud() {
  position = position + 10;//Calculate new position
  if (position > window.innerHeight)//Reset position if necessary
    position = 0;

  //Using the CSS to change position of div
  document.getElementById("movingCloud1").style.top = position + "px";
}

setInterval(rightCloud, 100);

function rightCloud() {
  position = position + 10;//Calculate new position
  if (position > window.innerHeight)//Reset position if necessary
    position = 0;

  //Use CSS to change position of div
  document.getElementById("movingCloud2").style.top = position + "px";
}

//GAME STARTS HERE
window.addEventListener("keydown", (e) => {
  let xPos = parseInt(window.getComputedStyle(rocket).getPropertyValue("left"));//collecting the generated style of the rocket made and setting up the conditions under this.

  //here 592  is the width of the board(of uptil how much the rocket can go) - width of the rocket
  if (e.key == "ArrowRight" && xPos <= 592) {
    rocket.style.left = xPos + 30 + "px"; //moving the rocket right side by 30 pixels
  }
  else if (e.key == "ArrowLeft" && xPos > 8) { //xPos>8 means the the rocket will move uptil when the board ends and not more than that
    rocket.style.left = xPos - 30 + "px"; //moving the rocket towards left side by 30 pixels
  }

  if (e.keyCode == 32) { //32 is the keycode for spacebar
    let bullet = document.createElement("div");//making the bullet of the rocket with the createElement function
    bullet.classList.add("bullets");//creates more bullets to shoot from the "bullets" in the html page. We are adding bullets class.
    gameBoard.appendChild(bullet);//adding more bullets with the appendChild function

    let bulletMovement = setInterval(() => {//moves the bullet upwards
      let meteorRocks = document.getElementsByClassName("meteors");//getting the ID from the html page

      for (let i = 0; i < meteorRocks.length; i++) {
        let rock = meteorRocks[i]; //making the meteors in a loop and storing it in the rock variable
        if (rock != undefined) {
          let rockEdge = rock.getBoundingClientRect(); //this function will store the coordinate details of the meteor i.e., left, right, top positions
          let bulletEdge = bullet.getBoundingClientRect();//this function will store the coordinate details of the bullet being released.
          //Without this function, the bullet will stay in one place and not move.




          if (  //this is the condition to check whether the meteor(rock) and the bullet are at the same position, if they are,then we eliminate that meteor(rock)
            bulletEdge.left >= rockEdge.left &&
            bulletEdge.right <= rockEdge.right &&
            bulletEdge.top <= rockEdge.top &&
            bulletEdge.bottom <= rockEdge.bottom
          ) {
            rock.parentElement.removeChild(rock); //removing that meteor(rock);
            // Now we get the score board by getting the ID, and we increase the score by 50 for every meteor shot
            document.getElementById("score").innerHTML =
              parseInt(document.getElementById("score").innerText) + 50;
          }
        }
      }
      let bottomOfBullet = parseInt(
        window.getComputedStyle(bullet).getPropertyValue("bottom")//taking bullet style from bullets, the black bullet image.
      );

      
      if (bottomOfBullet >= 650) { //Stops the bullet from moving outside the gamebox 
        clearInterval(bulletMovement);
      }

      bullet.style.left = xPos + "px"; //bullet should always be placed at the top of the rocket
      bullet.style.bottom = bottomOfBullet + 5 + "px";//speed of the bullet, moves by 5 pixels
    });
  }
});

let generatedRocks = setInterval(() => {
  let rock = document.createElement("div");//let rock be another name for meteors, we store the new div made into this variable
  rock.classList.add("meteors");

  //generate value between 0 to 500, here 500 is the width of the board - width of the rock
  rock.style.left = Math.floor(Math.random() * 500) + "px";//creating the random meteors falling to spread evenly uptil width 500

  gameBoard.appendChild(rock);//adding the meteors into our board
}, 800);//this creates the rate of falling meteors, so if it was a lesser number, there would be a lot more meteors falling.

let rockMovement = setInterval(() => { //setting the movement of the meteors (downwards)
  let rocks = document.getElementsByClassName("meteors");//again getting it by class name to access the meteors

  if (rocks != undefined) {
    for (let i = 0; i < rocks.length; i++) {
      //We have to increase the top of each rock,so that the rocks can move downwards
      let rock = rocks[i]; //getting each rock from the array through a for loop
      let topOfRock = parseInt(
        window.getComputedStyle(rock).getPropertyValue("top")//the top makes the meteors come down.
      );
      

     
      if (topOfRock >= 450 ) {//here 450 is the position of the game screen where the game over triggers when the meteor touches the end.

               
        updateScore(localStorage.loggedInUser, document.getElementById("score").innerText);//calling the update score function


        alert("Game Over")
        clearInterval(rockMovement);
        
       window.location.reload();
        location.href = "LeaderboardPage.html";
      }

      rock.style.top = topOfRock + 50 + "px";//number of pixels the meteors move
    }
  }
}, 350);//speed of the meteors

function updateScore(username, score) {//this function will store the scores of the logged in players and into the leaderboard.
  let users = JSON.parse(localStorage.users);//accessing the local storage users
  
  for (let i = 0; i < users.length; i++) 
  {//for loop for updating score of users
    
  
    if (users[i].myUsername == username) {
      
      if (parseInt(score) > parseInt(users[i].score)) {
    
        users[i].score = score;
        
        break;
      }
    }
  }
  console.log(JSON.stringify(users));
  localStorage.users = JSON.stringify(users);//storing back into local storage

}

