<?php 

	include "connection.php";
	include "topnav.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
	 <style type="text/css">
	 body{
		
		background-image: url("images/pp.jpg");
		background-repeat: no-repeat;
		
		
	 }
 		.wrapper
 		{
			max-width:300px;
 			width: 30vw;
 			margin: 0 auto;
			 color: black;

		 }
			 @media only screen and (min-width:280px)and (max-width:768px){


				body{
				display:block;
				background-image: url("images/pp.jpg");
				background-repeat: no-repeat;	
				background-size:cover;
	     }
 			     .wrapper{
				display:block;
				max-width:300px;
 				width: 30vw;
 				 
 				 margin: 0 auto;
				 color: black;


		 }

			 }	
			/* @media only screen and (min-height:640px){


				body{
				display:block;
				background-image: url("images/pp.jpg");
				background-repeat: no-repeat;	
				}
				.wrapper{
				display:block;
				width: 300px;
				margin: 0 auto;
				color: black;


				}

}	
*/

 	</style>
 </head>
 <body >
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; margin-top: 17px; width: 70px;" name="submit1" type = "submit">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php

 				if(isset($_POST['submit1']))   //button name = submit1
 				{
 					?>
 						<script type="text/javascript">
 							window.location="Edit.php";
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM reg where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center; color: white;">My Profile</h2>   

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/profileicon.png ".$_SESSION['pic']."'> 
 				</div>"; // to get image inside of a circle
 			?>
			 <br>
 			<div style="text-align: center; color:red;"> <b>WELCOME</b>  
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['Firstname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['Lastname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>