<?php

include "connection.php";
include "topnav.php";

?>
<!  DOCTYPE html>
<html>
<head>
<title>
  change password
</title>
<style type = "text/css">
body{

height :650px;
background-color:pink;
}

.wrapper{
    margin: 0 auto ;
    width: 400px;
     height : 400px;
     opacity : .8;
     background-color : black;
     color : white;
     
     
     
}

.form-control{
    width : 250px;
}
</style>
</head>
<body>
<div class= "wrapper">   <!-- form is inside the box -->

<div style = "text-align:center;">
<h1 style = "text-align: center; font-size: 35px; font-family: italic; " >  E-BOOK STORE </h1>
<h1 style = "text-align: center; font-size: 20px; font-family: italic; " >  Change password </h1>

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
</form>
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