<?php
  
  include "connection.php";
  include "headerthird.php";
  //session_start();
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
    	body
    	{
    		background-image: url("images/feedback2.jpg");
    		background-repeat: no-repeat;
    	}
    	.wrapper
    	{
			display:none;
    		padding: 10px;
    		margin: -1px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
    	.form-control
    	{
			display:none;
    		height: 70px;
    		width: 60%;
    	}
    	.scroll
    	{
			display:none;
    		width: 100%;
    		height: 300px;
    		overflow: auto;
		}
		
		@media only screen and (min-width:280px){
			body
    	{
    		background-image: url("images/feedback2.jpg");
			background-size: cover;
			background-position: center center;
    	}



			.wrapper
    	{
			display:block;
    		padding: 10px;
    		margin: -1px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
    	.form-control
    	{
			display:block;
    		height: 70px;
    		width: 60%;
    	}
    	.scroll
    	{
			display:block;
    		width: 100%;
    		height: 300px;
    		overflow: auto;
		}
		}

    </style>
</head>
<body>

	<div class="wrapper">
		<h4>If you have any suggesions or questions please comment below.</h4>
		<form style="" action="" method="post">
			<input class="form-control" type="text" name="comment" placeholder="Write something..."><br>	
			<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">	<br>
			<br>
	
			
		</form>
	
<br><br>
	<div class="scroll">
		
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `feedback` VALUES('',  '$_SESSION[login_user]','$_POST[comment]');";  /* form name = to this */
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `feedback` ORDER BY `feedback`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr>";
						echo "<td>"; echo $row['Username']; echo "</td>"; //this is foe displying user name
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `feedback` ORDER BY `feedback`.`id` DESC"; 
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
						echo "<td>"; echo $row['Username']; echo "</td>"; //this is foe displying user name
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
			}
		?>
	</div>
	</div>
	
</body>
</html>
