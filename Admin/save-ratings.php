
<?php
$bid= $_POST["bid"];
$ratings= $_POST["ratings"];

$conn = mysqli_connect("localhost", "root", "", "book");
 
 mysqli_query($conn , "INSERT INTO rate (bid, ratings) VALUES ('$bid', '$ratings')");
 echo "saved";

 ?>
    