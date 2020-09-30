<?php
session_start();   //to use session variable
if(isset($_SESSION['login_user']))     // if session variable has some value ie some one loged
{
unset($_SESSION['login_user']);      //need to logout that user

}
header("location: index.php");

?>