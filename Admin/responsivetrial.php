<?php
  include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.logo{
       padding-left: 20px;
       float: left;
       padding-top: 10 px;
       
  }
  .logo img{
      height: 150 px;
      width:   150px;
      padding-top: 10px;
      padding-left: 20px;
  }
    .container-fluid{
      
      background-color: #060505;
    }

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
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
    float: right;
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
    <!--<div class="logo"> <h1 style="color: white; font-size: 16px; line-height: 21px; margin-top: 2px; margin-left: 3px; font-style: italic">Find the next book in your list</h1>
			<img src="images/bklogo.jpg">
      </div>
      <a class="navbar-brand active" href="#" style= "margin-left:120px; margin-top: 17px; font-size: 30px; color:blue;"  >E-book Store</a> -->
    
  <a href="index.php" class="active" style= " margin-left:130px; margin-top: 20px;  font-size: 15px;">HOME</a>
  <a href="book1.php" style= "margin-top: 20px;  font-size: 15px;">BOOK</a>
  <a href="feedback.php" style= "margin-top: 20px;  font-size: 15px;">FEEDBACK</a>
  


 <?php
  
   if(isset($_SESSION['login_user']))   
   {  ?>

   <ul class = "nav navbar-nav">
   <li><a href = "profile.php" style= "margin-top: 20px;   font-size: 15px;">PROFILE</a></li>	   
         </ul>
	   <ul class = "nav navbar-nav navbar-right">
		    <li> <a href = "chatnew.php" style= "margin-top:  20px; "> <span class = "glyphicon glyphicon-envelope">&nbsp<span class = "badge bg-green">

      </span></a></li>
       <li> <a href = "profile.php" style= "margin-top: -11px;">
		   <div style ="color: white">
	   <?php
	   
	   echo "<img class='img-circle profile_img' height=30 width=30 src='images/p.jpg ".$_SESSION['pic']."'>";
	   echo "" .$_SESSION['login_user'];
	   ?>
   </div>	
   </a> </li>
	<li><a href="logout.php" style= "margin-top: 20px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
   </ul>
   <?php  
}
   else   //if a user not login then show login &sign up option
   { ?>
					<ul class = "nav navbar-nav navbar-right">
					<li><a href="login.php"  style= "margin-top: 20px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-in">LOGIN</span></a></li>
					
         <li><a href="register.php"  style= "margin-top: 20px;  font-size: 15px;"><span class = "glyphicon glyphicon-user">SIGNUP</span></a></li>
        </ul>

					
 <?php
} 
?> 

        </div>
        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
        </div>




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

</body>
</html>
