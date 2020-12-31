<?php
include "topnav.php";
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
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
  background-color: rgba(0,0,0,0.8);
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
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}


</style>
</head>
<body>

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
  <q>I find television very educating. Every time somebody turns on the set, I go into the other room and read a book.</q>
  <p class="author">-  Groucho Marx</p>
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

</body>
</html> 
