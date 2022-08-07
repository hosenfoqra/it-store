<?php
include("handlers/loginhandler.php");

$usr_id = $_SESSION['usr_info'][0];
$usr_name = $_SESSION['usr_info'][1];
$usr_age = $_SESSION['usr_info'][2];
$usr_email = $_SESSION['usr_info'][3];


?>

<html>
<head>
<title>IT Store ViIP User</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap.min.css" rel="stylesheet" media="screen">

<script>

</script>

<style> 
h1,h2{
    color: #FFFF;}
</style>
</head>
<body style="background-color:black;">

<div class="navbar">
<a href="vipuser.php">VIP Home</a>
<a href="vipoffers.html">VIP Offers</a>
<a href="gifts.html">Gifts</a>

<a>User name: <?php echo $usr_name ?></a>
<a>Email: <?php echo $usr_email ?></a>
<a href="login.php" style="margin-left: 570px">Log Out</a>

</div>

    <center>

	<div class="container-fluid" >  
        <h1> 
        Hello <?php echo $usr_name ?><br> Welcome to VIP Mode   <br><br>
        </h1>
       
    <h2>In this mode we are going to offer you special offers and gifts and much more!!<br> You can get many discounts. So, have fun !!</h2>
    <img src="pics/vip2.jpg"style="width:20%">
    </div>

    </center>






<footer>
</footer>


</body>
</html>