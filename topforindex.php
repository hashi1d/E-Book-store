
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		E-BOOK STORE
	</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <!--<meta name="HandheldFriendly" content="true">
	<link rel = "stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	
        
	
</head>

<body style="background-color:black;">
<div class="wrapper">
		<header>
	
            <div class="logo"> <h1 style="color: white; font-size: 15px; line-height: 21px; margin-top: -1px; margin-left: 4px; font-style: italic">Find the next book in your list</h1>
			
					<!-- <img src="images/bklogo.jpg"> -->

        	<h1 style="color: white;"></h1>
			<div class = "header stentence">
		<h1 style = "color :blue; margin-top : -86px; margin-left:350px; font-size: 27px;"> E-BOOK STORE </h1>
</div>
</div>
				
		<?php
			if( isset($_SESSION['login_user']))   //if sesson hs value ie person logged
			{  
				?>      <!-- closed php crz, nav bar is html tag -->
			     <nav>
		
				<ul>
					 
					<li><a href="index.php" >HOME</a></li>
					<li><a href="book1.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>   <!--afert loged loout should be there & when link to logout.php it returns again login bar -->
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="chatnew.php">FAN-CLUB</a></li>
					<li><a href="critisisum.php">IDEA-ZONE</a></li>
					</ul>
			</nav>
			<?php
			}

			else { 
				?>

			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="book1.php">BOOKS</a></li>
                    <li><a href="register.php">SIGNUP</a></li>
					<li><a href="login.php">SIGNIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    <li><a href="aboutus.php">ABOUT_US</a></li>
                    <li><a href="indextry.php">HELP</a></li>
				</ul>
			</nav>  

			<?php 
			}

        ?>
        </body>
        </html>