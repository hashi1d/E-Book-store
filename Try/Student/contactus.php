
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
    </style>
    <body>
    <form method = "post" action= "">
        <input type="text"  name="name"  placeholder="Name"> <br> <br>
        <input type="email"  name="email"  placeholder="E-mail"> <br> <br>
         <textarea name="msg" placeholder="Type your request"></textarea> <br> <br>
          <input type="submit" value= "submit request">
    </form>
    </body>
    </html>
