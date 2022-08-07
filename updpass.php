<?php

include_once 'updatepass.php';
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




        <div class="form-box2">
        
            <form  id="login" class="input-group2" action="" method="POST">
                

                <div>
                <label for="id">User ID</label>
                <input type="input" name="id"  class="input-field" placeholder="User ID">
                </div>
               <br>


                 <div>
                <label for="pass1">New Password</label>
                <input type="password" name="pass1"  class="input-field" placeholder="Password" required>
                </div>

                 <br>

                 <div>
                <label for="pass2">Confirm Password</label>
                <input type="password" name="pass2"  class="input-field" placeholder="Confirm Password" required>
                </div>


                <button type="submit" name="submit" class="submit-btn" >Reset Password</button>
               
        

            </form>


            

           

        </div>
        
    </div>
    <script>
    

    </script>
</body>

</html>