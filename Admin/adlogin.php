<?php
include "topnav.php";
include "connection.php";
//session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		E-BOOK STORE
	</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type = "text/css">
	section
	{
		margin-top: -20px;
	}
</style>

</head>


<body>
	<!--<div class="wrapper">
		<header>
		<div class="logo"> <h1 style="color: thistle; font-size: 10px; line-height: 25px; margin-top: 20px;">Find your dream book</h1>
			<img src="book logo.png">
			<h1 style="color: white;"></h1>
		</div>
	</header> -->
        
	<section>
<div class="reg_img">
<br>
<br>
<br>
<div class="box1">
<h1 style="text-align: center; font-size: 35px; font-family: lucida console;">
E-BOOK STORE
</h1>
<br>
<h1 style="text-align: center; font-size: 25px;">Sign In </h1>
<br>
<form name="login" action="" method="post">
	<div class="login">
	
	<br>
		<br>
   
	
	<input class = "form-control" type="text" name="username" placeholder="username" required = "">
	<br><br>
	<input class = "form-control" type="text" name="password" placeholder="password" required = "">
	<br><br>
	<br><br>
	<input class = "btn btn-default" type="submit" name = "submit" value="Login" href = "index.php">
</div>
<p style="color: white; padding-left: 15px;">
<br>
<br>
<br>
<br>
<a style="color: white; text-decoration:none;" href="updates.php"> Forgot password?</a>
<br> <br> <br>



New to E-Book store? <a style="color: white; text-decoration:none;" href="register.php">&nbspSign Up</a>
</p>

</form>
</div>

</div>


</section>

<?php

if(isset($_POST['submit']))  // if the button pressed
{
$count = 0;
$res = mysqli_query($db,"SELECT * FROM `admin` WHERE username ='$_POST[usrname]' &&  password= '$_POST[pzword]' ; ");
$row = mysqli_fetch_assoc($res);
$count = mysqli_num_rows($res);
}

if($count == 0)
{

    ?>
 <!--   
  <script type ="text/javascript">
  alert("reg first");
  </script>  -->
  <div class = "alert alert-danger" style = "width : 700px;  margin-left = 300px; background-color:#de1313; color:white">
  <strong> The username & password doesn't match/Signup first </strong>
</div>

    <?php
}
else   // if usrname & pzwrd doesn't match
{
	$_SESSION['login_user'] = $_POST['username'];
   ?> 
   <script type= "text/javascript">
   window.location = "index.php";

   </script>
   <?php 
}

?>
</body>
</html>