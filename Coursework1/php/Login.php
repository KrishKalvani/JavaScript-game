<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Login");
    outputBannerNavigation("Login");
?>

<!-- Contents of the page (Same internal css and same body code, comments from LoginPage.html) -->
<style>
        .LoginBoxButton{/*internal css for the login button and hover effect*/
            height:5%;
            width:15%;
            background: #5075BD;
            border: 1px solid #000000;
            color:white;
            font-size:100%;

        }
        .LoginBoxButton:hover{/*hover effect for the login button*/
            
    background-color: #4a469f;
    color: white;
    cursor: pointer;
  }
  .LogOutBoxButton{ /*internal css for the login button and hover effect*/
            height:6%;
            width:17%;
            background: #5075BD;
            border: 1px solid #000000;
            color:white;
            font-size:100%;

        }
        .LogOutBoxButton:hover{/*hover effect for the login button*/
            
    background-color: #4a469f;
    color: white;
    cursor: pointer;
  }

    </style>
<div class="LoginBox"><!--Here we are creating the login box background-->
    <h1 class="LoginHeading">Login</h1><!--Creating the heading "login"-->
    <br>
    <form onsubmit="return false;"><!--we need to take user input so we use form and add the list of credentials-->
                <table class="LoginTable" style="background-color:black;"><!--to organize our credentials and line them up we put them in a table-->
                    <tr>
                <td><label style="color: white; font-size: 150%;" for="username">Username:</label></td><!--Username label-->
                <td><input type="username" id="username" name="username"></td><br><br><!--username input box, type is username, i.e., a textbox kind of input box-->
                </tr>
            <tr>
                <td><label style="color: white; font-size:150%;" for="Loginpwd">Password:</label></td><!--password label-->
                <td><input type="password" id="Loginpwd" name="password" minlength="8"><br><br></td><!--password input box, type is password which makes the input concealed-->
                </tr>
            </table>
                <br>
                <!--here the login button is made with a submit type which will store the information once clicked(if user entered the credentials)-->
                <input class="LoginBoxButton" style="margin-left:50%; margin-top:10%;" type="submit" value="LOGIN" onclick="Login();"><!--we use inline CSS here, and other places also-->
                 <button class="LogOutBoxButton" onclick="logOut();">LOGOUT</button>
              </form>
              <!--REFERENCE for the form - W3Schools :https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_password-->
            
        </div>
        <script src="../js/Login.js"></script>
        <br><br><br><br>

<?php
    //Output the footer with the function
    outputFooter();
?>