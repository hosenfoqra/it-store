<?php
include_once 'includes/database.php';

$err = '';



if (isset($_POST['submit'])) {
    if(empty($_POST['id']) || empty($_POST['pass1']) || empty($_POST['pass2'])){
       $err='Fill the blanks';
   } else {

    $id=$_POST['id'];
    $pass=$_POST['pass1'];
    $pass2=$_POST['pass2'];

         
      
            $sql = "SELECT * FROM Users WHERE usr_id='$id';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck == 1 ) {

                if($pass == $pass2){

                    $sql2 = "UPDATE Users SET usr_pass='$pass' WHERE usr_id='$id';";
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


