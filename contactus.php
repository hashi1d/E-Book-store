
<?php

include "connection.php";
include "topnav.php";

try{
    $db = new mysqli("localhost", "root", "", "library"); 
}catch (Exception $exc) {
    echo $exc ->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
   
     $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

$is_insert= $db -> query("INSERT INTO 'contact' ('name','email','msg') VALUES ('$name','$email','$msg')");
if ($is_insert == TRUE) {
            echo "<h2> Thanks, Your request submitted </h2>";
            exit();
        }
    }
?> 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact us</title>
    </head>
    <style type = "text/css">
         body {
            background-image: url("images/bookicon01.jpg");
         }
         .wrapper
    	{   
            display:none;
    		padding: 10px;
    		margin: -1px auto;
    		width:900px;
    		height: 700px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
        .form-control
    	{
            display:none;
            margin-top: 70px;
            margin-left: 300px;
    		height: 70px;
    		width: 30%;
    	}
        @media only screen and (min-width:280px){
            .wrapper
    	{  
            display:block;
    		padding: 10px;
    		margin: -1px auto;
    		width:900px;
    		height: 700px;
    		background-color: black;
    		opacity: .8;
    		color: white;
        }
        .form-control
    	{
            display:block;
            margin-top: 70px;
            margin-left: 300px;
    		height: 70px;
    		width: 30%;
    	}

    }
    	
    </style>
    <body>
        <div class= "wrapper">
    <form method = "post" action= "">
        <h2 style = "font-size: 30px; color:blue; margin-left:240px;"> Let us know about your issues....</h2>
        <input class = "form-control" type="text"  name="name"  placeholder="Name"> <br> 
        <input class = "form-control" type="email"  name="email"  placeholder="E-mail"> <br> 
         <textarea class = "form-control" name="msg" placeholder="Type your request"></textarea> <br> <br><br>
          <input style= "margin-left:370px" class="btn btn-default" type="submit" value= "submit request">
    </form>
    </div>
    </body>
    </html>
