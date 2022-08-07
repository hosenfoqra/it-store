<?php
include_once 'includes/database.php';
session_start(); //start the PHP_session function

$err = '';



if (isset($_POST['submit'])) {
    if (empty($_POST['usr_email']) || empty($_POST['usr_pass'])) {
        $err = 'Email or password is not exist';
    } else {
        $email = $_POST['usr_email'];
        $password = $_POST['usr_pass'];

         
      

            $sql = "SELECT * FROM Users WHERE usr_email='$email' AND usr_pass='$password';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck == 1) {
                $row = mysqli_fetch_row($result);
                $_SESSION['usr_info'] = $row;

                header('Location:vipuser.php');
            } else {
                $err = 'Email or Password is invalid';
            }
        
        

        mysqli_close($conn);
    }
}


