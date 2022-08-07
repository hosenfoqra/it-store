<?php
include 'database.php';


// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create table query execution
$sql = "CREATE TABLE Users(
    usr_id INT NOT NULL AUTO_INCREMENT,
    usr_name VARCHAR(30) NOT NULL,
    usr_age VARCHAR(30) NOT NULL,
    usr_email VARCHAR(30) NOT NULL,
    usr_pass VARCHAR(30) NOT NULL,
    PRIMARY KEY (usr_id)
    )";

if(mysqli_query($conn, $sql)){

    echo "users table created successfully. -----";
    $sql_add_usrdent = "INSERT INTO Users (usr_name, usr_age, usr_email , usr_pass )
    VALUES ('Omar Soliman' , 24 , 'omar@test.com' , '11' )
    
    ";

if(mysqli_query($conn, $sql_add_usrdent)){
    echo "usr inserted successfully.------ ";

}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);


?>