<?php
include("handlers/resetpasshandler.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT Store</title>
    <link href="loginstyle.css" rel="stylesheet" media="screen">
</head>

<body>


    <div class="hero">
        <div class="form-box2">
        
            <form  id="login" class="input-group2" action="" method="POST">
                <input type="email" name="usr_email" id="email" class="input-field" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <input type="text" name="usr_age" class="input-field" placeholder="Age" required>
                <input type="password" name="usr_new_pass" class="input-field" placeholder="New Password" required>
                <input type="password" name="usr_new_pass2" id="password" class="input-field" placeholder="Confirm Password" required>
                <button type="submit" name="submit" class="submit-btn" >Reset Password</button>
               
        

            </form>
            <span class="red"><?php echo $err; ?> </span>

           

        </div>
        
    </div>
    <script>
    

    </script>
</body>

</html>