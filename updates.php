<?php


include "topnav.php";
include "connection.php";

?>
<! DOCTYPE html>
<html>
<head>
<title>
  change password
</title>
<style type = "text/css">
body{

height :650px;
background-image:url("images/pass.jpg");
background-repeat: no-repeat;

}

.wrapper{
    margin: 0 auto ;
    max-width: 410px;
     height : 440px;
     opacity : .8;
     background-color : black;
     color : white;
     
     
     
}

.form-control{
    max-width : 250px;
    width: 25vw;
    display:block;
    height: 27px;
}

.h1{
  text-align: center; 
  padding: 20px; 
  font-size: 35px;
   font-family: italic; 
}

.h2{
  text-align: center; 
  font-size: 20px; 
  font-family: italic;
}

@media only screen and (min-width:280px) {
  body{


background-image:url("images/pass.jpg");
background-image: no-repeat;
background-size: cover;
background-position: center center;

}

.wrapper{
    margin: 0 auto ;
    max-width: 400px;
     height : 410px;
     opacity : .8;
     background-color : black;
     color : white;
     
     
     
}

.form-control{
    max-width:250px;
    width : 25vw;
    display:block;
    height: 27px;
    position: center;
}

.h1{
  text-align: 50%; 
  padding: 20px; 
  font-size: 35px;
   font-family: italic; 
}

.h2{
  text-align: center; 
  font-size: 20px; 
  font-family: italic;
}

}
</style>
</head>
<body>
<div class= "wrapper">   <!-- form is inside the box -->

<div style = "text-align:center;">
<h1 class = "h1">  E-BOOK STORE </h1>
<h2 class = "h2"  >  Change password </h1>

</div>
<div  style ="padding-left:80px";>   <!-- used another div before form to make changes only inside form, take buttons/labels middle -->
<form action =""  method ="post">
<input type = "text" name = "username" class = "form-control" placeholder = "Username" required = "">
<br>
<input type = "text" name = "email" class = "form-control" placeholder = "Email" required ="">
<br>
<input type = "text" name = "password" class = "form-control" placeholder = "New Password" required ="">
<br>
<br>

  <button class = "btn btn-default"  type = "submit" name = "submit">Update </button>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
</form>
<a href = "login.php">
    <button  class = "btn btn-default" style = "color: black; margin-left:0px; margin-top: 27px;"> BACK</button>
</a>
</div>
</div>
<?php
  if (isset($_POST['submit']))
{
  //if password updated we show a msg
  if( mysqli_query($db, "UPDATE reg SET password = '$_POST[password]' WHERE username = '$_POST[username]' AND email = '$_POST[email]' ;"))
  {
      ?>    
      <!-- as this is js code we need to close php and strat, inside that wtite js -->
              <script type ="text/javascript">
             alert("The password changed....");
             
             </script>

      <?php
  
  }
}


?>
</body>
</html>