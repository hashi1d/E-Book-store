<?php

$db = mysqli_connect("localhost","root","","library");

if(!$db){

    die("connection faild :" . mysqli_connect_error());
}

echo "successfull";

?>


