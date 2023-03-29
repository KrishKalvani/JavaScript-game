"use strict";
function init(){
    let users=JSON.parse(localStorage.users);
    let table=document.getElementById("jsLeaderboard");

    //this is the reference : objs.sort((a,b) => (a.last_nom > b.last_nom) ? 1 : ((b.last_nom > a.last_nom) ? -1 : 0)) ternary if statement
    // users.sort((user1,user2) => (user1.score>user2.score) ? 1: ((user2.score>user1) ? -1 :0))
    users.sort((user1,user2) => {return (user1.score-user2.score)*-1})//this whole statement will order the scores in desceding
    

    table.innerHTML= "<tr> <th width='10%'>NO.</th> <th>NAME</th> <th>SCORE</th> </tr>";

    let noOfUsers=Math.min(5,users.length);//either 5 or less than 5. only if less than 5 users have registered
    for (let entry = 0; entry < noOfUsers; entry++){//using backticks allow the $ sign which gets access to the variable names.
        //beginning the row tr and inputting the td data
        table.innerHTML += `<tr>       
        <td>${entry+1}</td>
        <td>${users[entry].myUsername}</td>
        <td>${users[entry].score}</td>
        </tr>`
        }//table is made here with this algorithm



    console.log(users);
    let profile=document.getElementById("profile");//getting id
   if(localStorage.loggedInUser === undefined){
    localStorage.loggedInUser="Guest";
}
   let loggedInUser= localStorage.getItem("loggedInUser");
   profile.innerText=loggedInUser;
}
