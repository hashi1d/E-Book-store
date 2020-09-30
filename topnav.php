<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>

	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">   <!--as my bootsrap links are not working i used this method 
    -->
    <style type = "text/css">


.logo{
       padding-left: 20px;
       float: left;
       padding-top: 40 px;
       
  }
  .logo img{
      height: 150 px;
      width:   150px;
      padding-top: 10px;
      padding-left: 20px;
  }
    .container-fluid{
      color: #000000;
    }



   </style>

</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="logo"> <h1 style="color: white; font-size: 12px; line-height: 21px; margin-top: -1px; margin-left: 3px; font-style: italic">Find the next book in your list</h1>
			<img src="images/bklogo.jpg">
      </div>
      <a class="navbar-brand active" href="#" style= "margin-left:120px; margin-top: 12px; font-size: 25px;"  >E-book Store</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="index.php"   style= "margin-top: 15px;  font-size: 15px;">HOME</a></li>
      <li><a href="feedback.php"   style= "margin-top: 15px;  font-size: 15px;">FEEDBACK</a></li>
    </ul>  

<br> 

<?php
   if(isset($_SESSION['login_user']))   
   {  ?>

   <ul class = "nav navbar-nav">
   <li><a href = "profile.php" style= "margin-top: -5px;  font-size: 15px;">PROFILE</a></li>	   
         </ul>
	   <ul class = "nav navbar-nav navbar-right">
		    <li> <a href = "chat.php" style= "margin-top:  -5px; "> <span class = "glyphicon glyphicon-envelope">&nbsp<span class = "badge bg-green">0 </span></a></li>
       <li> <a href = "profile.php" style= "margin-top: -11px; ">
		   <div style ="color: white">
	   <?php
	   
	   echo "<img class='img-circle profile_img' height=30 width=30 src='images/p.jpg ".$_SESSION['pic']."'>";
	   echo "" .$_SESSION['login_user'];
	   ?>
   </div>	
   </a> </li>
	<li><a href="logout.php" style= "margin-top: -5px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
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


</body>
</html>

