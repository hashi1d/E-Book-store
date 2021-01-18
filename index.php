
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
	<link rel = "stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>
<style>

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: black;
  color: white;
}

.flip-box-back {
  background-color: black;
  color: white;
  transform: rotateY(180deg);
}
	</style>

<body style="background-color:black;">
<div class="wrapper">
		<header>
	
            <div class="logo"> <h1 style="color: white; font-size: 15px; line-height: 21px; margin-top: -1px; margin-left: 4px; font-style: italic">Find the next book in your list</h1>
			
					<img src="images/bklogo.jpg">

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
                    <li><a href="contactus.php">HELP</a></li>
				</ul>
			</nav>  

			<?php 
			}

		?>
			
		</header>
		<section style="background-color:#040404;" >
			<div class="sec_img">
			<div class="w3-content w3-section"  style= "  width: 100%; height: 700px;">
                <img class = "mySlides w3-animate-fading" src="images/f.jpg" style="width: 60%;">
                <img class="mySlides w3-animate-left" src="images/5.jpg" style="width: 60%;">
                <img class="mySlides w3-animate-left" src="images/3.jpg" style="width: 60%;">
                <img class="mySlides w3-animate-left" src="images/4.jpg" style="width: 60%;">
                <img class="mySlides  w3-animate-fading" src="images/5.jpg" style="width: 60%;"> 
                <img class="mySlides  w3-animate-fading" src="images/7.jpg" style="width: 60%;">
                <img class="mySlides w3-animate-fading" src="images/8.jpg" style="width: 60%;">
               </div>
               <script type="text/javascript">
                var a=0;
                carousel();// dispay one by one pictures
                function carousel(){
                    var i;
                    var j = document.getElementsByClassName("mySlides");
                    //document.write(j.length);
                    for(i=0; i<j.length; i++)
                    {
                        j[i].style.display= "none";
                    }
                    a++; 
                    if(a>j.length)
                    {a=1}
                    j[a-1].style.display = "block";
                    setTimeout(carousel,3000);
                }
            </script>
		<!--
			<img src="images/backgrnd2.jpg">
			
			<h1 style="text-align: center; font-size: 35px; font-color:white; ">WELCOME</h1>
			<br><br><br> 
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px; ">WELCOME</h1><br><br>
	
			</div>   
		</div> 	-->
	</section>
          

	</div>

	<div class = "next" style= "float:right;  margin-top: -450px;">
					<h2 style = "color:white; float: right;  margin-top: -500px; margin-right:220px;"> Top most audio</h2>
				
  <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
	  <h2 style= "font-size:20px;">WELCOME TO E-BOOK STORE</h2>
	  <br>
	  <br>
	  <p style = "color: red;"> <i>What should you read next?? </i></p>
    </div>
    <div class="flip-box-back">
	  <h2></h2>
	  <p>The more that you read, the more things you will know. The more you learn, the more places you’ll go. 
		  <br> 
		  <br> <h4 style = "color: red;"> Join &  keep reading with E-BOOK Store </h4>
	  </p>
    </div>
  </div>
</div>

			</div>


	<?php
			include "foter.php";	
			?>
</body>

</html>

