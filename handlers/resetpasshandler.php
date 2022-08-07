<?php
include_once 'includes/database.php';
$err = '';



if (isset($_POST['submit'])) {
    if (empty($_POST['usr_email']) || empty($_POST['usr_new_pass']) || empty($_POST['usr_new_pass2']) || empty($_POST['usr_age']) ) {
        $err = 'Email or password is not exist';
    } else {
        $email = $_POST['usr_email'];
        $password = $_POST['usr_new_pass'];
        $password2 = $_POST['usr_new_pass2'];
        $age = $_POST['usr_age'];

         
      
            $sql = "SELECT * FROM Users WHERE usr_email='$email' AND usr_age='$age';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck == 1 ) {

                if($password == $password2){
                    $sql2 = "UPDATE Users SET usr_pass='$password' WHERE usr_email='$email';";
                    $result = mysqli_query($conn, $sql2);
                    $err = 'Password updated';

                    header('Location:login.php');
                }else{
                    $err = 'Password do not match';

                }
                
            } else {
                $err = 'Error';
            }
        
        

        mysqli_close($conn);
    }
}


