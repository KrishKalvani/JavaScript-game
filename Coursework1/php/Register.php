<?php
    //Include the PHP functions to be used on the page 
    include('Common1.php'); 
	
    //Output header and navigation 
    outputHeader("Rocketman - Register");
    outputBannerNavigation("Register");
?>

<!-- Contents of the page (Same internal CSS and same body code, comments from RegisterPage.html)-->
<style>
        .RegisterBoxButton{/*Internal CSS for register button, cancel button and the check box with hover effects*/
            position:absolute;
            color: white;
            height:5%;
            width:6%;
            background: #5075BD;
            border: 1px solid #000000;
           margin-top:4%;
           margin-left:7%;
        }
        .CancelBoxButton{
            position:absolute;
            color: white;
            height:5%;
            width:5%;
            background: #5075BD;
            border: 1px solid #000000;
           margin-top:1%;/*Higher value moves it towards down*/
           margin-left:7%;/*Higher value moves it towards right*/
        }
        .checkBoxPosition{/*positioning the check box along with "I agree to the rules"*/
            position: absolute;
            margin-top:2%;
            margin-left:4%;
        }
        .RegisterBoxButton:hover{/*Hover effect for the register button*/
    background-color: #4a469f;
    color: white;
    cursor: pointer;
  }
        .CancelBoxButton:hover{/*Hover effect for the cancel button*/
    background-color: #4a469f;
    color: white;
    cursor: pointer;
  }
    </style>
    <script src="../js/Registration.js">checkGender()</script>
<div class="RegisterBox"><!--register background box-->
    <h1 class="RegisterHeading">Registration</h1><!--register heading-->
    
    <form id="form" action="file:///C:/xampp/htdocs/Coursework1/pages/HomePage.html" method="POST" onsubmit="return false;"><!--form to make the credentials of registraion process-->
                <table class="RegisterTable" style="background-color:black;"><!--putting them in a table to line them up-->
                    <tr>
                        <td><label style="color:white;" for="name">Name:</label></td><!--name label-->
                        <td><input type="name" id="myName" name="name" value="" required></td><!--name input box-->
                    </tr>
                    <tr>
                        <td><label style="color:white;" for="date">DOB:</label></td><!--date label as DOB-->
                        <td><input type="date" id="myDOB" name="date" value="" required></td><!--the date type will make a calendar input box to select date of birth of the user-->
                    </tr>
                    <tr>
                        <td><label style="color:white;" for="gender">Gender:</label></td><!--gender label-->
                        <td style="color:white;">
                            <input type="radio" id="myGender" value="Male" name="Gender" required>Male
                        <input type="radio" id="myGender" name="Gender" value="Female" required>Female<!--radio type makes the option appearance for users to select between 2 or more options-->
                        </td>
                        
                    </tr>
                    <tr>
                <td><label style="color: white;" for="username">Username:</label></td><!--username label-->
                <td><input type="username" id="myUsername" name="username" value="" required></td><!--username input box-->
            </tr>
            <tr>
                <td><label style="color: white;" for="pwd">Password:</label></td><!--password label-->
                <td><input type="password" id="originalPwd" name="password" value="" minlength="8" required><button id="SeePass" onmousedown="showHide();" onmouseup="showHide();">See Password</button><br></td><!--password input box with a limit of 8 character, type is password which makes the input concealed-->
              
            </tr>

            <tr>
                <td><label style="color:white;" for="confirmPwd">Confirm Password:</label></td><!--confirm password label-->
                <td><input type="password" id="confirmPwd" name="password" value="" minlength="8" required><button id="SeePass" onmousedown="showHide2();" onmouseup="showHide2();" >See Password</button><br></td><!--same password type, just to make sure the user types in the same password here, from the password label input box-->
            </tr>
        </table>
        <br>
            <div class="checkBoxPosition"><!--a div to add a check box below the table for the user to agree to the rules of the game-->
                <input type="checkbox" id="myCheckBox" name="checkbox" value="" required><!--input type is check box so when clicked it will show a check in the box-->
                <label style="color:white;" for="confirmBox">I agree to the rules</label><!--the check box label saying "I agree to the rules"-->
            </div>

            
                <input class="RegisterBoxButton" type="submit" value="REGISTER" onclick="register()"><!--register button with a submit type which will store the information once clicked(if user entered the credentials) -->
                <input class="CancelBoxButton"  type="submit" value="CANCEL" onclick="clearInput()"><!--cancel button with a submit type which will just clear out anything that the user enters to reset(as of now it will not work) -->
                
              </form>
              <!--REFERENCE for the form -W3Schools: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_password-->
              
            
        </div>
        
        <br><br><br><br>
    
        

<?php
    //Output the footer
    outputFooter();
?>