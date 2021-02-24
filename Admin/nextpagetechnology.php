<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  margin-left:auto;
  margin-right:auto;
  width: 60%;
  padding: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
img {
  border-radius: 50%;
}

.h2{
  text-align:center; 
  color:#5d2a5b;
}
.p{
   text-align:center;
   color:#b54a68;
   
}

.h21{
  text-align:center;
}
.p1{
  color:#fff;
  font-size:17px;
}

@media screen and (min-width: 280px)and(max-width:768px){
.h2{
  color:green;
}

.p{
  color:blue;
  font-size: 15px;
}
.p1{
  color:#fff;
  font-size:20px;
}

}






</style>
</head>
<body>

<h2 class = "h2"> We lose ourselves in books, we find ourselves there too...</h2>
<p class = "p"><i>Books let you travel without moving your feet</i></p>




          
<div class="row">
  <div class="column" style="background-color:#b5b059;">
  <img src="images/cat/tec.jpg" alt="" style="width:100px; display:block; margin-left: auto; margin-right:auto;">
    <h2 class ="h21">Technology</h2>
    <p class ="p1"><i> Technology can be most broadly defined as the entities, both material and immaterial, created by the application of mental and physical effort in order to achieve some value. In this usage, technology refers to tools and machines that may be used to solve real-world problems. </i></p>
    <ul>
    <a href = "soft.php"> <li > <img src="images/cat/soft.jpg" alt="" style="width:40px"> Software </li></a>
    <br>
     <a href = "hard.php"> <li>  <img src="images/cat/hard.jpg" alt="" style="width:40px"> Hardware</li> </a>
     <br>
     <a href = "internet.php"> <li>  <img src="images/cat/int.jpg" alt="" style="width:40px"> Internet </li> </a>
     <br>
     <a href = "web.php"> <li>  <img src="images/cat/web.jpg" alt="" style="width:40px">Web Design </li> </a>
     <br>
     <a href = "pro.php">  <li> <img src="images/cat/pro.jpg" alt="" style="width:40px"> Programming</li> </a>
    </ul>
  </div>

 



<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
