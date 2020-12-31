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

<!--  for slide show 
<div class="slideshow-container">

<div class="mySlides">
  <q>Books are good company, in sad times and happy times, for books are people – people who have managed to stay alive by hiding between the covers of a book</q>
  <p class="author">- E.B. White</p>
</div>

<div class="mySlides">
  <q>A book is a garden, an orchard, a storehouse, a party, a company by the way, a counselor, a multitude of counselors.</q>
  <p class="author">- Charles Baudelaire</p>
</div>

<div class="mySlides">
  <q>A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading</q>
  <p class="author">-  William Styron</p>
</div>

<div class="mySlides">
<q>No man can be called friendless who has God and the companionship of good books</q>
<p class="author">-  Elizabeth Barrett Browning</p>
</div>

<div class="mySlides">
  <q>It is a good rule after reading a new book, never to allow yourself another new one till you have read an old one in between</q>
  <p class="author">-   C.S. Lewis</p>
</div>

<div class="mySlides">
  <q>A half-read book is a half-finished love affair.</q>
  <p class="author">-  David Mitchell</p>
</div>

<div class="mySlides">
  <q>Some of these things are true and some of them lies. But they are all good stories.</q>
  <p class="author">-  Hilary Mantel</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
end of theslide show -->



 <!--<div id="btnContainer">
 <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i>  LIST</button>
</div>  -->
t

          
<div class="row">
  <div class="column" style="background-color:#699e8b;">
  <img src="images/life2.jpg" alt="" style="width:100px">
    <h2>Life Style</h2>
    <p><i>Lifestyle is a way of life established by a society, culture, group or individual. This includes patterns of behavior, interaction, consumption, work, activity and interests that describe how a person spends their time</i></p>
    <ul>
    <a href = "lifes.php"> <li > <img src="images/fasb.jpg" alt="" style="width:40px"> Fashion & Beauty  </li></a>
    <br>
     <a href = "home & garden.php"> <li>  <img src="images/hg2.jpg" alt="" style="width:30px">Home & Garden </li> </a>
     <br>
     <a href = "food & nut.php"> <li>  <img src="images/fn.jpg" alt="" style="width:40px"> Food & Nutrition  </li> </a>
     <br>
     <a href = "envi.php"> <li>  <img src="images/en.jpg" alt="" style="width:40px">Environment  </li> </a>
     <br>
     <a href = "travel.php">  <li> <img src="images/tr.jpg" alt="" style="width:40px">  Travel </li> </a>
    </ul>
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
