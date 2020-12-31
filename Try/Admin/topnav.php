<?php
  session_start();
?>

<html>
<head>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

	<header>
	<!--<<div class="logo"> <h1 style="color: white; font-size: 15px; line-height: 21px; margin-top: -1px; margin-left: 4px; font-style: italic">Find the next book in your list</h1>
			<img src="images/bklogo.jpg">
			<h1 style="color: white;"></h1>
			<div class = "header stentence">
		<h1 style = "color :white; margin-top : -88px; margin-left:350px; font-size: 27px;"> E-BOOK STORE </h1>
</div>  -->
	<!-- <nav class = "navbar navbar-inverse">
		<div class = "container-fluid">
	<div class = "navbar-header">
		<a class = "navbar-brand active "> E-BOOK STORE </a>  
</div>      -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-BOOK STORE</a>
    </div> 
				<ul class = "nav navbar-nav "  >
					<li><a href="index.php">HOME</a></li>
					<li><a href="book.php">BOOKS</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
                    
					
</ul>
<br>

<?php
   if(isset($_SESSION['login_user']))   
   {  ?>
   <div class ="color: white">
	   <?php
	   echo "welcome" .$_SESSION['login_user'];
	   ?>
   </div>	   

	   <ul class = "nav navbar-nav navbar-right">
		   <li> <a href = "">
		   <div class ="color: white">
	   <?php
	   echo "welcome" .$_SESSION['login_user'];
	   ?>
   </div>	
   </a>
   </li>
	<li><a href="logout.php"><span class = "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
   </ul>
   <?php  
}
   else   //if a user not login then show login &sign up option
   { ?>




					<ul class = "nav navbar-nav navbar-right">
					<li><a href="login.php"><span class = "glyphicon glyphicon-log-in">LOGIN</span></a></li>
					
                    <li><a href="register.php"><span class = "glyphicon glyphicon-user">SIGNUP</span></a></li>
                    
					</ul>

					
 <?php
}
?>

				</div>
			</nav>
</header>

</body>
</html>

<!-- this will make chnges in login page -->