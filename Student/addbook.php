<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>

	<title>Books</title>
	<style type = "text/css">
	.srch{
		padding-left: 1200px;
		color: red;

	}  
     /*styling abiut side nav  */
	 body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url("images/bookicon01.jpg");
  color: #202aa2;
}

.sidenav {
	margin-top: 148px;  /*to see the top nav well without covering  */
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
.one:hover{
    color:white;
	width:300px;
	height:50px;
	background-color: #044a44;

}
 .b{
     width : 300px;
     margin : 0px auto;  /*  to get to form into middle possition */
     color :  black;
 }
   .form-control
   {
     background-color: black;
     color : white;
   }
	</style>
	
  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
 <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
	<meta charset="utf-8">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
   
  
</head>
</head>
<body>    
  <!-- this is about side nav -->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


  <div style ="color: white; margin-left: 50px; font-size: 14px;">   <!-- this div is from topnav - to show the userimage and name in sidw nav -->
	   <?php
	   if(isset($_SESSION['login_user']))  // use this for side nav, without this if user is not loged it shows errors  or & only tabs without pic, if user logged 
	   {
	   echo "<img class='img-circle profile_img' height=80 width=80 src='images/p.jpg ".$_SESSION['pic']."'>";
	   echo "<br>";
	   echo "WELCOME"  .$_SESSION['login_user'];
	   }
	   ?>
   </div>	
<br>
<br>
  <div class = "one" ><a href="addbook.php">ADD BOOK</a></div>
  <div class = "one" ><a href="book1.php">BOOK REQUEST</a></div>
  <div class = "one" ><a href="contactus.php">HELP</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer; color: black"  onclick="openNav()">&#9776; open</span>    <!-- this is for creating side nav only inside add book pag -->
   <div class = "container"  ; style = "text-align:center;">  <!-- style text-align crz t get button to the center -->
   <h3 style ="color : black; font-family :  Lucida Console; text-align : center;">  ADD NEW BOOKS </h2>
   <form class="b"  action="" method="post">
    
        
        <input class="form-control" type="text" name="bid" placeholder="Book Id:"  required = ""; ><br>
        <input class="form-control" type="text" name="bname" placeholder="Book Name:"  required = ""; ><br>
        <input class="form-control" type="text" name="blevel" placeholder="Book Level:"  required = ""; ><br>
        <input class="form-control" type="text" name="authors" placeholder="Author:"  required = ""; ><br>
        <input class="form-control" type="text" name="Medium" placeholder="Medium:"  required = ""; ><br>

		<button    class="btn btn-default" type="submit"  name="submit"  style="width: 100px; height: 35px; color : black;">	 ADD
    </button>
    </form> 
    </div>
<?php
   if(isset($_POST['submit']))  //if someone press buton then check this condition
{
   if (isset($_SESSION['login_user'])) // to check this user has logged 1stly
  {
     mysqli_query($db, "INSERT INTO book VALUES ('$_POST[bid]','$_POST[bname]','$_POST[blevel]','$_POST[authors]','$_POST[Medium]');")
    
?>
    <script type = "text/javascript">
    alert("Book Added Successfully");
    </script>
<?php

  }

  else
  {

    ?>
    <script type = "text/javascript">
    alert("LOG FIRST");
   </script>

    <?php

  }
}
?>

</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

<!--   above continue till this -->

  </body>
  </html>