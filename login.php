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
	<!--<link rel="stylesheet" type="text/css" href="styles.css"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

	body{
		background-image: url("images/lo1.jpg");
	}
     
	 .wrapper   /*box */
			   {
				   display:none;
				   padding: 10px;
				   margin: -1px auto;   /* automatically resize the position */
				   width:800px;
				   height: 630px;
				   background-color: black;
				   opacity: .7;
				   color: white;
				  
		
			   } 
			   .form-control     /* form styling */
			   {   
				   display:none;
				   height: 50px;
				   width: 40%;
				   margin-left: 250px;
				   
			   }
			
			   .scroll
			   {
				   display:none;
				   width: 100%;
				   height: 300px;
				   overflow: auto;
			   }
			   @media only screen and (min-width:280px){
				.wrapper   /*box */
			   {
				   display:block;
				   padding: 10px;
				   margin: -1px auto;   /* automatically resize the position */
				   width:800px;
				   height: 630px;
				   background-color: black;
				   opacity: .7;
				   color: white;
				  
		
			   } 
			   .form-control     /* form styling */
			   {
					display:block;
				   height: 50px;
				   width: 40%;
				   margin-left: 250px;
				   
			   }
			
			   .scroll
			   {
				  display:block;
				   width: 100%;
				   height: 300px;
				   overflow: auto;
			   }


			   }





   </style>
</head>


<body>
	<div class="wrapper">
		<!--<header>
		<div class="logo"> <h1 style="color: thistle; font-size: 10px; line-height: 25px; margin-top: 20px;">Find your dream book</h1>
			<img src="book logo.png">
			<h1 style="color: white;"></h1>
		</div>
	</header> -->
        
	
<div class="box1">
<h1 style="text-align: center; font-size: 35px;  color: red;font-family: lucida console; margin-left:-10px; ">
E-BOOK STORE
</h1>
<br>
<h1 style="text-align: center; font-size: 25px; margin-left:-20px;">Sign In </h1>
<br>
<form name="login" action="" method="post">
	<div class="login">
	
	<br>
	
	<input class = "form-control" type="text" name="username" placeholder="username" required = "">
	<br><br>
	<input class = "form-control" type="password" name="password" placeholder="password" required = "">
	<br><br>
	<br><br>
	<input  class="btn btn-default" style= "margin-left: 250px;" type="submit" name = "submit" value="Login" href = "index.php">
</form>
<p style="color: white; padding-left: 15px;">
<br>
<br>
<br>
<br>
<a style="color: white; margin-left:230px;" href="updates.php"> Forgot password?</a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

New to E-Book Store? &nbsp <a style="color: white;" href="register.php"> Sign Up</a>
</p>


</div>

</div>



<?php

if(isset($_POST['submit']))  // if the button pressed
{
$count = 0;
$res = mysqli_query($db,"SELECT * FROM `reg` WHERE username ='$_POST[username]' &&  password= '$_POST[password]' ; ");
$_row = mysqli_fetch_assoc($res);
$count = mysqli_num_rows($res);

}

if($count == 0)
{

    ?>
 <!--   
  <script type ="text/javascript">
  alert("reg first");
  </script>  -->
  <div class = "alert alert-danger" style = "width : 700px;  margin-left = 300px;">
  <strong> The username & password doesn't match/Signup first </strong>
</div>

    <?php
}
else
{
	$_SESSION['login_user'] = $_POST['username'];          //wt ever user give as usernme,store it inside session variable
	$_SESSION['pic'] = $row['pic'];   //this is for profile pic 
   ?> 
   <script type= "text/javascript">
   window.location = "index.php";

   </script>
   <?php 
}

?>
</body>
</html>