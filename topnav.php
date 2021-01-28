<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">  as my bootsrap links are not working i used this method -->
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
    <!--<link rel = "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src = "https://ajax.gooleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <style type = "text/css">
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

     

/*     This is for drop down  */

.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  /*background-color: #2980B9;  */
  background-color:#0c0c0c;
}

.dropdown {
  position: relative;
  display: inline-block; 
  margin-top: 14px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
/* responsive */






</style>

</head>

<body>
  

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="logo"> <h1 style="color: white; font-size: 16px; line-height: 21px; margin-top: 2px; margin-left: 3px; font-style: italic">Find the next book in your list</h1>
			<img src="images/bklogo.jpg">
      </div>
      <a class="navbar-brand active" href="#" style= "color:blue; margin-left:120px; margin-top: 12px; font-size: 25px;"  >E-book Store</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="index.php"   style= "margin-top: 15px;  font-size: 15px;">HOME</a></li>
      <li><a href="feedback.php"   style= "margin-top: 15px;  font-size: 15px;">FEEDBACK</a></li>
      <li><a href="book1.php"   style= "margin-top: 15px;  font-size: 15px;">BOOKS</a></li>
      <!--<li><a href="feedback.php"   style= "margin-top: 15px;  font-size: 15px;">CATEGORY </a> -->
      <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">CATEGORY </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="nextpagelife.php">Life Style</a>
    <a href="nextpagechildren.php">Children & Youth</a>
    <a href="nextpageacademic.php">Academic & Education</a>
    <a href="nextpagebio.php">Biography</a>
    <a href="nextpagetechnology.php">Technology</a>
    <a href="nextpagepersonal.php">Personal Growth</a>
    <a href="nextpagereligion.php">Religion</a>
    <a href="nextpageart.php">Art</a>
    <a href="nextpagehealth.php">Health & Fitness</a>
    <a href="nextpageenvi.php">Environment</a>
    <a href="nextpagepoli.php">Politics & Law</a>
    <a href="nextpagefic.php">Fiction & Literature</a>
  </div>
</div>


    </ul>
    <br>

<?php
   if(isset($_SESSION['login_user']))   
   {  ?>

   <ul class = "nav navbar-nav">
   <li><a href = "profile.php" style= "margin-top: -4.5px;   font-size: 15px;">PROFILE</a></li>	   
         </ul>
	   <ul class = "nav navbar-nav navbar-right">
		    <li> <a href = "chatnew.php" style= "margin-top:  -5px; "> <span class = "glyphicon glyphicon-envelope">&nbsp<span class = "badge bg-green">

      </span></a></li>
       <li> <a href = "profile.php" style= "margin-top: -11px;">
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
					<li><a href="login.php"  style= "margin-top: -5px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-in">LOGIN</span></a></li>
					
         <li><a href="register.php"  style= "margin-top: -5px;  font-size: 15px;"><span class = "glyphicon glyphicon-user">SIGNUP</span></a></li>
        </ul>

					
 <?php
} 
?> 
  

				</div>
      </nav>
      
     <!-- This is for drop down  -->

      <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 //responsive
 

</script>
</body>
</html>

