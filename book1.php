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
		padding-left: 1000px;
		color: red;

	}  
     /*styling abiut side nav  */
	 body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
.del{
	     padding-left: 1000px;
		color: red;

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
  <div class = "one" ><a href="book1.php">VIEW BOOK</a></div>
  <div class = "one" ><a href="#">BADGE REQUEST</a></div>
  <div class = "one" ><a href="#">DELETE BOOK</a></div>
  <div class = "one" ><a href="">HELP</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


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

<div class = "srch">
    <form class = "navbar-form" method = "post" name = "form1">
       
            <input class = "form-control" type = "text" name = "search" placeholder= "search books..." required = ""  style ="float: left"> <!-- here flt left is for getting button near to the other srch one -->
            <button style = "background color: blue;" type  = "submit" name = "submit" class = "btn btn-default">
			<span class = "glyphicon glyhicon-search"></span>  &nbsp Search 
			
			<!--<input class = "form-control" type="text" name="search" placeholder= "search books..." required = "">
             <button type="submit"><i class="fa fa-search" ></i></button>   -->


</button>

</form>
</div>
 <!-- this form is for delete bar -->
 <div class = "del">
<form class = "navbar-form" method = "post" name = "form1">
       
            <input class = "form-control" type = "text" name = "bid" placeholder= "Enter Book" required = ""    style ="float: left">
			
            <button style = "background color: blue;" type  = "submit" name = "submit1" class = "btn btn-default">
		     DELETE</button> 
			</form> 
</div>
	<h2>List Of Books</h2>
	<?php
	if(isset($_POST['submit']))
	{
		$q = mysqli_query($db, "SELECT *from book WHERE bname like '%$_POST[search]%'");
		if(mysqli_num_rows($q)==0)
		{
			echo "sorry! No book found..";
		}
		else //when raw is found
		{
			echo "<table class='table table-bordered' >"; 
			echo "<tr style='background-color: 'yellow' ,border = '1px green','border-collapse: collapse'>";
			echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Book -Level";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Medium";  echo "</th>";
                
                
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))    // data written inside while crz need to see all raws(all data)
			{
				echo "<tr>";    //inside that raw data are inserted below
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bname']; echo "</td>";
				echo "<td>"; echo $row['blevel']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['Medium']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";

		}

	}
	else    //if btn is not pressed
	{
		$res=mysqli_query($db,"SELECT * FROM `book` ORDER BY `book`.`bname` ASC;"); 

		echo "<table class='table table-bordered' >";    //styles using bootstarap in w3 school
			echo "<tr style='background-color: yellow;' ,border = '1px green','border-collapse: collapse'>"; // first raw is tables header
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Book -Level";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Medium";  echo "</th>";
                
                
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))    // data written inside while crz need to see all raws(all data)
			{
				echo "<tr>";    //inside that raw data are inserted below
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bname']; echo "</td>";
				echo "<td>"; echo $row['blevel']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['Medium']; echo "</td>";
				

				echo "</tr>";
			
		}
		echo "</table>";
	}
			   //this is for delete bar 
			   if(isset($_POST['submit1']))
			   {
				   if(isset($_SESSION['login_user']))
				   {
					   mysqli_query($db,"DELETE from book where bid = '$_POST[bid]'; ");
					   ?>
						    <script type="text/javascript">
							   alert("Deleted.");
						   </script>
					   <?
				   }
				   else
				   {
								   ?>
						   <script type="text/javascript">
							   alert("Please Login First.");
						   </script>
					   <?php
				   }
			   }
 
		   ?>
         </div>  <!-- here i used all the code inside main div , bcz of that, when side nav open table gets small -->
		</body>
		</html>			

