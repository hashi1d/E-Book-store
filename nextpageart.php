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

@media screen and (max-width:800px){
.h2{
  color:green;
}

.p{
  color:blue;
  font-size: 15px;
}
.p1{
  color:black;
  font-size:20px;
}

}







</style>
</head>
<body>

<h2 class = "h2"> We lose ourselves in books, we find ourselves there too...</h2>
<p  class = "p"><i>Books let you travel without moving your feet</i></p>




          
<div class="column" style="background-color:#4a9644;">
  <img src="images/cat/art.jpg" alt="" style="width:100px; display:block; margin-left: auto; margin-right:auto;">
    <h2 class = "h21">Art</h2>
    <p class = "p1"><i>Art is generally understood as any activity or product done by people with a communicative or aesthetic purpose—something that expresses an idea, an emotion or, more generally, a world view. It is a component of culture, reflecting economic and social substrates in its design</i></p>
    <ul>
    <a href = "phptography.php"> <li > <img src="images/cat/photo.jpg" alt="" style="width:40px"> Photography</li></a>
    <br>
     <a href = "painting.php"> <li>  <img src="images/cat/paint.jpg" alt="" style="width:40px"> Painting & Drawing</li> </a>
     <br>
     <a href = "music.php"> <li>  <img src="images/cat/music.jpg" alt="" style="width:40px"> Music</li> </a>
     <br>
     <a href = "craft.php"> <li>  <img src="images/cat/craft.jpg" alt="" style="width:40px"> Craft & Hobbies </li> </a>
</div>
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
