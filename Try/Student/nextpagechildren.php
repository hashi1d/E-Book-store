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
  float: left;
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



/*  this styling is for qupote slide show */
/* for a slide show  */
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background-image: url("images/b.jpg");
  background-repeat: no-repeat;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: blue;
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic; color: #fff}

/* Add a blue color to the author */
.author {color: cornflowerblue;}


</style>
</head>
<body>

<h2 style = "margin-left: 20px; color:#5d2a5b"> We lose ourselves in books, we find ourselves there too...</h2>
<p style = "margin-left: 130px; color:#b54a68"><i>Books let you travel without moving your feet</i></p>

<!-- end of theslide show -->



 <!--<div id="btnContainer">
 <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i>  LIST</button>
</div>  -->
t

          


  <div class="column" style="background-color:#f5e9af;">
  <img src="images/cat/cy.jpg" alt="" style="width:100px">
    <h2>Children & Youth</h2>
    <p><i> 'youth', as those persons between the ages of 15 and 24 years, without prejudice to other definitions by Member States.therefore, children are those persons under the age of 14</i></p>
    <ul>
    <a href = "par.php"> <li > <img src="images/cat/par.jpg" alt="" style="width:50px"> Parenting  </li></a>
    <br>
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
