
<?php
	include "connection.php";
	include "topnav.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	body
	{
			background-image: url("images/chatchat.jpg");
			background-repeat: no-repeat;
	}
.wrapper
{
	display:none;
	height: 600px;
	width: 500px;
	background-color: black;
	opacity: .9;
	color: white;
	margin: -20px auto;
	padding: 10px;
}
.form-control
{
	display:none;
	height: 47px;
	width: 76%;
}
.msg
{
	display:none;
	height: 450px;
	overflow-y: scroll;
}
.btn-info
{
	display:none;
	background-color: #02c5b6;
}
.chat
{
	display:none;
	display: flex;
	flex-flow:row wrap;
}
.user .chatbox
{
	display:none;
	height: 50px;
	width: 400px;
	padding: 13px 10px;
	background-color: #821b69;
	color: white;
	border-radius: 10px;
	order: -1;
}
.admin .chatbox
{
	display:none;
	height: 50px;
	width: 400px;
	padding: 13px 10px;
	background-color: #423471;
	color: white;
	border-radius: 10px;
}

@media only screen and (min-width:280px){


	.wrapper
{
	display:block;
	height: 600px;
	width: 500px;
	background-color: black;
	opacity: .9;
	color: white;
	margin: -20px auto;
	padding: 10px;
}
.form-control
{
	display:block;
	height: 47px;
	width: 76%;
}
.msg
{
	display:block;
	height: 450px;
	overflow-y: scroll;
}
.btn-info
{
	display:block;
	background-color: #02c5b6;
}
.chat
{
	display:block;
	display: flex;
	flex-flow:row wrap;
}
.user .chatbox
{
	display:block;
	height: 50px;
	width: 400px;
	padding: 13px 10px;
	background-color: #821b69;
	color: white;
	border-radius: 10px;
	order: -1;
}
.admin .chatbox
{
	display:none;
	height: 50px;
	width: 400px;
	padding: 13px 10px;
	background-color: #423471;
	color: white;
	border-radius: 10px;
}
}



</style>

<body>

<?php
	if(isset($_POST['submit']))
	{
		mysqli_query($db,"INSERT into `library`.`chat` VALUES ('', '$_SESSION[login_user]','$_POST[message]','No','student');");

		$res=mysqli_query($db,"SELECT * from chat where username='$_SESSION[login_user]' ;"); //to immediatly shown the msg

	}
	else
	{
		$res=mysqli_query($db,"SELECT * from chat where username='$_SESSION[login_user]' ;");
	}
	
?>

<div class="wrapper">
	<div style="height: 70px; width: 100%; background-color: #2eac8b; text-align: center; color:white; ">
		<h3 style="margin-top: -5px; padding-top: 10px;">WELCOME</h3>
	</div>
	<div class="msg">
    <br>
    <br>
	<?php
	  while ($row=mysqli_fetch_assoc($res))   //fetch data & keep it inside $row new variable
		{
			if($row['sender']=='student')
			{
	?>
		<!-------student---------------->
		<br>
        <div class="chat user">
			<div style="float: left; padding-top: 5px;">
				&nbsp
				<?php
                echo "<img class='img-circle profile_img' height=40 width=40 src='images/p.jpg".$_SESSION['pic']."'>";
                ?>
                &nbsp
			</div>
			<div style="float: left;" class="chatbox">
				<?php
					echo $row['Message'];
				?>
			</div>
		</div>

<?php
	}
	else
	{
?>
		<!-------admin---------------->

		<br><div class="chat admin">
			<div style="float: left; padding-top: 5px;">
				&nbsp
				<img style="height: 40px; width: 40px; border-radius: 50%;" src="images/p.jpg">
				&nbsp
			</div>
			<div style="float: left;" class="chatbox">
				<?php
					echo $row['Message'];
				?>
			</div>
		</div>

		<?php
	}
	}
		?>
	</div>

	<div style="height: 100px; padding-top: 10px;" >
		<form action="" method="post">
			<input type="text" name="message" class="form-control" required="" placeholder="Write Message..." style="float: left"> 
			<button class="btn btn-info btn-lg" type="submit" name="submit"><span class="glyphicon glyphicon-send "></span>&nbsp Send</button>
		</form>
	</div>
</div>

</body>
</html>
