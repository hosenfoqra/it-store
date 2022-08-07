

<?php
//https://www.youtube.com/watch?v=-_EGjY_D1Oc
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once 'includes/database.php';


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$errmsg = ' ';


if(isset($_POST["email"])){

        $emailto=$_POST["email"];


        $sql = "SELECT * FROM Users WHERE usr_email='$emailto';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck == 1 ) {
            $row = mysqli_fetch_row($result);
           $code=$row[0];
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'it.store.35@gmail.com';                     // SMTP username
            $mail->Password   = 'itstore123';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('istote@example.com', 'ISTORE');
            $mail->addAddress($emailto);     // Add a recipient
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');


            $url= "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/updpass.php"; 
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "<h2> Your ID is :<b>$code</b> <br> Click <a href='$url'>this link</a> to reset password</h2>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            header('Location:login.php');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            

        }

} else {
            $errmsg = 'email not found';
        }



    }






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
                <input type="email" name="email"  class="input-field" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                
                <button type="submit" name="submit" class="submit-btn" >Reset Password</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

                <a href="login.php" class="button">BACK</a>

               
        

            </form>
            
            <?php  echo $errmsg; ?>

           

        </div>
        
    </div>
    <script>
    

    </script>
</body>

</html>