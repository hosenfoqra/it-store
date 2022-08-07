<?php
include_once 'includes/database.php';
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);


$err='';


if(isset($_POST['submit'])){
    if(empty($_POST['usr_name'])  || empty($_POST['usr_pass1']) || empty($_POST['usr_pass2']) ||empty($_POST['usr_age']) || empty($_POST['usr_email2'])){
        $err='Fill the blanks';
    }
    else{      
            $usr_name=$_POST['usr_name'];
            $usr_age=$_POST['usr_age'];
            $usr_email2=$_POST['usr_email2'];
            $usr_pass1=$_POST['usr_pass1'];
            $usr_pass2=$_POST['usr_pass2'];

            if($usr_pass1==$usr_pass2){
                    $sql = " INSERT INTO Users (usr_name,usr_age,usr_email, usr_pass)
                    VALUES ('$usr_name','$usr_age','$usr_email2','$usr_pass1');";

                    if ($conn->query($sql) === TRUE) {
                        header('Location:login.php');
                    } 
                    else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        $conn->close();
            }
            else{
                $err='Passwords does not mach';
            }
    }
}
