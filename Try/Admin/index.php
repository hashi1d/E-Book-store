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
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo"> <h1 style="color: thistle; font-size: 10px; line-height: 25px; margin-top: 20px;">Find your dream book</h1>
			<img src="book logo.png">
			<h1 style="color: white;"></h1>
		</div>

		<?php
			if( isset($_SESSION['login_user']))
			{ 
				?>      <!-- closed php crz, nav bar is html tag -->
			     <nav>
				<ul>
				     <li><a href="index.php">HOME</a></li>
					<li><a href="book1.php">BOOKS</a></li>
					<li><a href="login.php">LOGOUT</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="critisisum.php">Critisisum</a></li>
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
					<li><a href="login.php">LOGOUT</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>                                   
					</ul>
			</nav>

			<?php }

		?>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="book1.php">BOOKS</a></li>
					<li><a href="adlogin.php">LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    <li><a href="feedback.php">ABOUT_US</a></li>
                    <li><a href="feedback.php">HELP</a></li>
				</ul>
			</nav>  
		</header>
		<section>
			<div class="sec_img">

			
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">E-BOOK STORE</h1><br><br>
				
			</div>
		</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email: ebookstoreonline@gmail.com 
				<br>
				<br>
				Mobile:  0774010605
			</p>
		</footer>
	</div>
</body>

</html>

