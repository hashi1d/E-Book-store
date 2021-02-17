<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: left;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  
<?php
			if( isset($_SESSION['login_user']))   //if sesson hs value ie person logged
			{  
				?>      <!-- closed php crz, nav bar is html tag -->
			     <nav>
		
		
   <a href="logout.php">LOGOUT</a>
  
  <a href="feedback.php">FEEDBACK</a>
  <a href="critisisum.php">IDEA-ZONE</a>
  <a href="chatnew.php">FAN-CLUB</a>
  <a href="book1.php">BOOKS</a>
  <a href="index.php" class="active">HOME</a>

  
  

   </nav>
			<?php
			}

			else { 
				?>

			<nav>
      <a href="indextry.php">HELP</a>
      <a href="aboutus.php">ABOUT_US</a>
      <a href="feedback.php">FEEDBACK</a>
          <a href="login.php">SIGNIN</a>
      <a href="register.php">SIGNUP</a>
      <a href="book1.php">BOOKS</a>
				 <a href="index.php" class="active">HOME</a>
          
         
			
			</nav>  

			<?php 
			}

        ?>

<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</div>

</body>
</html>
