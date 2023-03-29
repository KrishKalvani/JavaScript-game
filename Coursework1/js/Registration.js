let button;
let passwordInput;//input that the user puts
let strongRegEx = new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{7,}$");//conditions for a strong password




function clearInput() {//clears all inputs when we press the cancel button
    document.getElementById("form").reset();
}
window.onload = init;


function init() {//obtaining and setting up the local storage and also updating the profile name icon.
    
    button = document.getElementsByClassName("RegisterBoxButton");

    passwordInput = document.getElementById("originalPwd");



    if (localStorage.users === undefined) {
        localStorage.users = "[]";
    }

    let profile = document.getElementById("profile");
    if (localStorage.loggedInUser === undefined) {
        localStorage.loggedInUser = "Guest";
    }
    let loggedInUser = localStorage.getItem("loggedInUser");
    profile.innerText = loggedInUser;
    checkGender();
}
function checkPassword() {// checks if the password is strong or not

    let password = document.getElementById("originalPwd").value;
    let result = strongRegEx.test(password);


    if (result) {
        passwordInput.style.color = "green";
        return true;

    } else {
        passwordInput.style.color = "red";
        alert("password not strong");
        return false;
    }

}
function checkConfirmPassword() {//checks if the password is the same as confirm password
    let password = document.getElementById("originalPwd").value;
    let confirmPassword = document.getElementById("confirmPwd").value;
    console.log(password);
    console.log(confirmPassword);

    if (password == confirmPassword) {
        alert("registration successful");
        return true;
    } else {
        alert("password not same");
        return false;
    }
}



function register() {//getting the values of all the user inputs 
    let name = document.getElementById("myName").value;
    let DOB = document.getElementById("myDOB").value;
    let gender = document.getElementById("myGender").value;
    let username = document.getElementById("myUsername").value;
    let password = document.getElementById("originalPwd").value;
    let confirmPassword = document.getElementById("confirmPwd").value;
    let checkBox = document.getElementById("myCheckBox").value;

    


   
    if(name== "" || DOB=="" || gender=="" || username=="" || password=="" || confirmPassword==""){//validating to make sure the user doesnt miss anything
        alert("fill in all the details");
         return false;

    }
    if (!(checkPassword() && checkConfirmPassword())) {
        return;
    }
    
    let newUser = {//user array which is stored in the local storage. All registered users stored here.
        myName: name,
        myDOB: DOB,
        myGender: gender,
        myUsername: username,
        myPassword: password,
        myConfirmedPassword: confirmPassword,
        myCheckBox: checkBox,
        score:0
    }


    let users = JSON.parse(localStorage.getItem("users"));
    console.log(typeof (users));
    console.log(users);
    console.log(newUser);
    if (users.some(e => e.myUsername == newUser.myUsername)) {//checking if the user already exists
        alert("User is already registered.")
    } else {//if not exisitng then put it in the array
        users.push(newUser);
        localStorage.users = JSON.stringify(users);
    }
    location.href = "LoginPage.html";// takes us directly to login page after registering

    
}
function showHide() { //to view the orginial password
    let pass = document.getElementById("originalPwd");
    if (pass.type == "password") {
        pass.type = "text";
    } else {
        pass.type = "password"
    }
}
function showHide2() { //to view the re-typed password

    let confirmPass = document.getElementById("confirmPwd");
    if (confirmPass.type == "password") {
        confirmPass.type = "text";
    } else {
        confirmPass.type = "password"
    }


}

function checkGender(){
    let radioInputs=document.querySelectorAll("input[name=Gender]");
    
    for (let i = 0; i<radioInputs.length; i++){
        if (radioInputs[i].checked){
            return true;
        }
    }
    return false;

}   


