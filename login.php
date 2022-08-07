<?php
include("handlers/registerhandler.php");
include("handlers/loginhandler.php");
include("handlers/resetpasshandler.php");

//include("includes/create_users_table.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT Store</title>
    
    <link href="loginstyle.css" rel="stylesheet" media="screen">
</head>
<body>


<!-- navv-->




<!---navv-->
    <div class="hero">
       
    <button  name="home" id="home" >home</button>

        <div class="form-box">
        

            <div class="button-box">
                
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>
           
            <div class="navbar">
            <center>
        <a href="resetpass.php">Forget Your Password?</a>
        </center>
        </div>

            <form  id="login" class="input-group" action="" method="POST">
                <input type="email" name="usr_email" id="email" class="input-field" placeholder="User Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <input type="password" name="usr_pass" id="password" class="input-field" placeholder="Enter Password" required>
                <button type="submit" name="submit" class="submit-btn" >Login</button>
                <br>
              
               
            



            </form>
            <span class="red"><?php echo $err; ?> </span>

            <form  id="register" class="input-group" action="" method="POST">
                <input type="text" name="usr_name"  class="input-field" placeholder="Name" required>
                <input type="text" name="usr_age" class="input-field" placeholder="Age" required>
                <input type="email" name="usr_email2"  class="input-field" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <input type="password" name="usr_pass1" class="input-field" placeholder="Enter Password" required>
                <input type="password" name="usr_pass2"  class="input-field" placeholder="Enter Confirmation Password" required>
                <button type="submit" name="submit" class="submit-btn" >Sign up</button>
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