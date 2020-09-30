<?php
 include "topnav.php";
 include  "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
<title> chat</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">  -->
<style type="text/css">

body{
    background-image:url("images/");

     }
.wrapper{

    padding: 10px;
    margin: -1px auto;   /* automatically resize the position */
    width:500px;
     height: 600px;
     background-color: black;
    opacity: .8;
    color:white;
     
}     
.form-control{
height: 50px;
width :  77%;


}

.chat{
    height:450px;
    overflow-y: scroll;
}

.btn-info{
  background-color:#02c5b6;

}
.chat-user{
  display:flex;
  flex-flow: wrap;

}

.user   .chatbox{

    height: 50px;
    width: 400px;
    padding: 13px 10px;
    background-color: yellow;
    border-radius : 10px;
    order:-1;
    color: white;

}
</style>




<body>
<?php    //write this beggining because we need to consider  this first
  if(isset($_POST['submit']))
  {
      mysqli_query ($db,"INSERT INTO library.chat VALUES ('','$_SESSION[login_user]','$_POST[Message]','No','student');");
     
  }
  else{

       $res = mysqli_query($db, "SELECT * from chat where username= '$_SESSION[login_user]'")
  {

?>
<div class = "wrapper">
<div style = "height : 70px; width : 100%; background-color: #146a75; text-align:center; color:black;">
<h3 style= "margin-top: 0px; padding-top:20px; margin-left: -20px;"> Admin </h3>
</div>
<div class = "chat">
<br>
<?php

while($row = mysqli_fetch_assoc($res))
{

  if ($row['sender'] == 'student')
}
?>
<!--student -->
<div class = "chat-user">
<div style = "float: left;  padding-top: 5px;">
&nbsp
<?php
echo "<img class='img-circle profile-img' height=40 width=35 src='images/profileicon.png ".$_SESSION['pic']."'>";
?> &nbsp
</div>
<div class= "chatbox" style = "float: left; ">
<p > Hi! </p>
  <?php
  echo "$row['message']";
  ?>

</div>
</div>
</div>
<div style ="height: 100px; padding-top:10px;">
<form action = " " method = "post">

<input class="form-control" type="text" name="Message" placeholder="Enter your message" required =""  style ="float: left"><br>
<button class="btn btn-info btn-lg"  type = "submit" name = "submit"><span class = "glyphicon glyphicon-send"> </span>  Send </button>	
</form>
</div>
</div>
<?php
  if(isset($_POST['submit']))
  {
      mysqli_query ($db,"INSERT INTO library.chat VALUES ('','$_SESSION[login_user]','$_POST[Message]','No','student');");
     
  }

?>


</body>
</html>