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


<div class="column" style="background-color:#d4bf9b;">
  <img src="images/cat/lit.jpg" alt="" style="width:100px">
    <h2>Fiction & Literature</h2>
    <p><i>This particular branch of literature consists of stories, novels, and dramas based on made-up and fabricated stories and characters. Fiction contains certain symbolic and thematic features known as “literary merits.” In other words, fiction narrates a story, which aims at something bigger than merely a story. </i></p>
    <ul>
    <a href = "classic lit.php"> <li > <img src="images/cat/clas.jpg" alt="" style="width:40px">Classic Literature</li></a>
    <br>
     <a href = "science fiction.php"> <li>  <img src="images/cat/hor.jpg" alt="" style="width:40px"> Science & Fiction</li> </a>
     <br>
     <a href = "crime.php"> <li>  <img src="images/cat/drama.jpg" alt="" style="width:40px">Mystery & Crime</li> </a>
     <br>
     <a href = "poet.php"> <li>  <img src="images/cat/poet.jpg" alt="" style="width:40px">Poetry</li> </a>
     <br>
     <a href = "romance.php"> <li>  <img src="images/cat/romance.jpg" alt="" style="width:40px">Romance</li> </a>
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
