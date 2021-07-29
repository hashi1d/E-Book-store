<?php
include "topnav.php";
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		E-BOOK STORE
	</title>
	<!--<link rel="stylesheet" type="text/css" href="styles.css"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
     
     body{
        background-image: url("images/login.jpg");
     }
    .wrapper   /*box */
              {
                
                  padding: 10px;
                  margin: -1px auto;   /* automatically resize the position */
                  max-width:800px;
                  height: 820px;
                  background-color: black;
                  opacity: .9;
                  color: white;
                  
              } 
              .form-control     /* form styling */
              {
               
                  height: 50px;
                  max-width: 300px;
                  width:30vw;
                 margin-left:240px; 
              }
              .btn-default{
                margin-left:357px;

              }
              
              .scroll
              {
                
                  width: 100%;
                  height: 300px;
                  overflow: auto;
              }

              @media only screen and (min-width:280px) and (max-width:768px){
                body{
                  background-image: url("images/login.jpg");
                  background-size: cover;
                  background-position: center center;

              }
             
                .wrapper   /*box */
              {
               
                  padding: 10px;
                  margin: -1px auto;   /* automatically resize the position */
                  max-width:800px;
                  height: 820px;
                  background-color: black;
                  opacity: .8;
                  color: white;
                  
              } 
              .form-control     /* form styling */
              {
                
                  height: 50px;
                  max-width: 300px;
                  width:30vw;
                  margin-left:150px; 
              }
              .btn-default{
                margin-left:150px;

              }
              .scroll
              {
                
                  width: 100%;
                  height: 300px;
                  overflow: auto;
              }
              }
  </style>
</head>


<body>
	
	
		 <!--<div class="logo"> <h1 style="color: thistle; font-size: 10px; line-height: 25px; margin-top: 20px;">Find your dream book</h1>
			<img src="book logo.png">
			<h1 style="color: white;"></h1>
        </div> 
    
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="User_Login.php">USER-LOGIN</a></li>
					<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    <li><a href="feedback.php">ABOUT_US</a></li>
                    <li><a href="feedback.php">HELP</a></li>
				</ul>
            </nav>
-->
    
        
       
<div class="wrapper">
                    
                    <h1 style = "text-align:center ;">Register Here</h1>
                    <h2 style = "text-align:center;"> Input your true details...</h2>
                    <br>
                    <br>
                
                    <br>
                    

    <form name="login" action="" method="post">
        
        <input class = "form-control"  type="text" name="Firstname" placeholder="Firstname" required="">
        <br>
            <br>
       
        <input class = "form-control" type="text" name="Lastname" placeholder="Lastname" required = "">
        <br><br>
        <input class = "form-control" type="text" name="username" placeholder="username" required = "">
        <br><br>
        <input class = "form-control" type="text" name="password" placeholder="password" required = "">
        <br><br>
        <input class = "form-control" type="text" name="email" placeholder="email" required = "">
        <br><br>
        <input class = "form-control"  type="text" name="contact" placeholder="contact" required = "">
        <br><br>
        <input  class="btn btn-default"  type="submit" name = "submit" value="Sign up">
    </form>
    
</div>


 


<?php

if(isset($_POST['submit']))
{
     $count = 0;
     $sql = "SELECT username FROM reg";
     $res= mysqli_query($db,$sql);
     while($row = mysqli_fetch_assoc($res))
     {
        if($row['username'] == $_POST['username'])

        {

            $count = $count+1;
        }

     }
     if($count == 0)
    {
    mysqli_query($db,"INSERT INTO `reg` VALUES ('$_POST[Firstname]','$_POST[Lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','profileicon.png'); ");

    ?>
    <script type = "text/javascript">
         alert("registration succesfull");
         window.location = "login.php";
    </script>
    <?php
}
else
{
    ?>
    <script type = "text/javascript">
         alert(" username alredy exists..Enter another username");
    </script>
    <?php
}
}

?>

</body>
</html>