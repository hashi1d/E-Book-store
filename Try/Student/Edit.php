<?php
	include "topnav.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<style type="text/css">
	 body{
		background-image: url("images/edit.jpg");
		background-repeat: no-repeat;
		
		
	 }
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
        
		}
		label
		{
			color: black;
		}

	</style>
</head>
<body >

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM reg WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$Firstname=$row['Firstname'];
			$Lastname=$row['Lastname'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: black;">WELCOME</span>	
		<h4 style="color: dark blue;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="Firstname" value="<?php echo $Firstname; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="Lastname" value="<?php echo $Lastname; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']); //file name & destination

			$Firstname=$_POST['Firstname'];
			$Lastname=$_POST['Lastname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$pic=$_FILES['file']['name'];  //  create that variable

			$sql1= "UPDATE reg SET pic='$pic', Firstname='$Firstname', Lastname='$Lastname', username='$username', password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";
//this is how saved the values inside the form  (.session.) 
			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

