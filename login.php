<?php
include("handlers/registerhandler.php");
include("handlers/loginhandler.php");
include("handlers/resetpasshandler.php");
//include("includes/create_users_table.php");
?>
<!DOCTYPE html>
<html lang="en">
<style>

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
 display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
 margin-top: 10px;
  border: 3px solid green;
  margin-left: 440px;
  margin-right: 440px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<head>

    <meta charset="utf-8">
    <title>IT Store</title>
    
    <link href="loginstyle.css" rel="stylesheet" media="screen">


    <div class="hero">
       

    <br>
    <style>
      .button {
        width: 20%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #ff105f, #ffad06);
    border: 0;
    outline: none;
    border-radius: 30px;
    text-align: center;
    text-decoration: none;
    color: white;
      }
    </style>
  </head>
  <body>
    <a href="index.php" class="button">home</a>
  </body>



        <div class="form-box">
        
       
            <div class="button-box">
          
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>
           
            <div class="navbar">
            <center>
        <a href="resetpass.php">Forget Your Password?</a>
        <span> <?php echo $err ?></span>
        </center>
        </div>

            <form  id="login" class="input-group" action="" method="POST">
                <input type="email" name="usr_email" id="email" class="input-field" placeholder="User Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <input type="password" name="usr_pass" id="password" class="input-field" placeholder="Enter Password" required>
                <button type="submit" name="submit" class="submit-btn" >Login</button>
                <br>
            </form>

            

        


            <form  id="register" class="input-group" action="" method="POST">
                <input type="text" name="usr_name"  class="input-field" placeholder="Name" required>
                <input type="text" name="usr_age" class="input-field" placeholder="Age" required>
                <input type="email" name="usr_email2"  class="input-field" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              <!--  <input type="password" name="usr_pass1" class="input-field" placeholder="Enter Password" required>
                <input type="password" name="usr_pass2"  class="input-field" placeholder="Enter Confirmation Password" required>  --->


              
    <input type="password" id="psw" name="usr_pass1" class="input-field" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <input type="password" name="usr_pass2"  class="input-field" placeholder="Enter Confirmation Password" required>


    <button type="submit" name="submit" class="submit-btn" >Sign up</button>
</form>
    </div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>


<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
   
            </form>
        </div>
    </div>
  

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function signup() {
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }

        function login() {
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0"
        }

        function ValidateEmail(inputText)
            {
            var mailformat = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            if(inputText.value.match(mailformat))
            {
            document.form1.text1.focus();
            return true;
            }
            else
            {
            alert("You have entered an invalid email address!");
            document.form1.text1.focus();
            return false;
            }
            }

    </script>
</body>

</html>