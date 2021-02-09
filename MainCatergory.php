
<?php
  
  include "topnav.php";
  include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  height: 100%;
  padding: 150px;
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


.h2z{
  text-align:center;
  color:#5d2a5b;
  font-size: 30px;
}
.p{
  text-align:center;
  color:#b54a68;
  font-size: 20px;
}

.lifeh{
   font-size:28px;
   color:black;
   margin-top:-29px;
}

.lifep{
  
}
@media screen and (max-width:800px){
  .h2z{
  text-align:center;
  color:purple;
  font-size: 34px;
}
.p{
  text-align:center;
  color:blue;
  font-size: 26px;
}

.lifeh{
   font-size:28px;
   color:black;
   margin-top:-29px;
  
}
.lifep{
  
}
}


</style>
</head>
<body>

<h2 class = "h2z" > We lose ourselves in books, we find ourselves there too...</h2>
<p  class = "p"><i>Books let you travel without moving your feet</i></p>

<!--  for slide show -->
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
<!-- end of theslide show -->



 <!--<div id="btnContainer">
 <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i>  LIST</button>
</div>  -->


          
<div class="row">
  <div class="column" style="background-color:#699e8b;">
  <img class = "life" src="images/life2.jpg" alt="" style=" margin-top:-130px; width:100px">
    <h2 class = "lifeh" >Life Style</h2>
    <p class = "lifep"><i class = "lifep">Lifestyle is a way of life established by a society, culture, group or individual. This includes patterns of behavior, interaction, consumption, work, activity and interests that describe how a person spends their time</i></p>
    <ul>
    <a href = "lifes.php"> <li style= "font-size:18px; color:white;"> <img src="images/fasb.jpg" alt="" style="width:40px"> Fashion & Beauty  </li></a>
    <br>
     <a href = "home & garden.php"> <li style= "font-size:18px; color:white;">  <img src="images/hg2.jpg" alt="" style="width:30px">Home & Garden </li> </a>
     <br>
     <a href = "food & nut.php"> <li style= "font-size:18px; color:white;">  <img src="images/fn.jpg" alt="" style="width:40px"> Food & Nutrition  </li> </a>
     <br>
     <a href = "envi.php"> <li style= "font-size:18px; color:white;">  <img src="images/en.jpg" alt="" style="width:40px">Environment  </li> </a>
     <br>
     <a href = "travel.php">  <li style= "font-size:18px; color:white;"> <img src="images/tr.jpg" alt="" style="width:40px">  Travel </li> </a>
    </ul>
  </div>

  <div class="column" style="background-color:#f5e9af;">
  <img src="images/cat/cy.jpg" alt="" style=" margin-top:-130px;width:100px">
    <h2 style= "margin-top:-29px;">Children & Youth</h2>
    <p><i> 'youth', as those persons between the ages of 15 and 24 years, without prejudice to other definitions by Member States.therefore, children are those persons under the age of 14</i></p>
    <ul>
    <a href = "par.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/par.jpg" alt="" style="width:50px"> Parenting  </li></a>
    <br>
  </div>
</div>


<div class="row" >
  <div class="column" style="background-color:#b35c5c;">
  <img src="images/ac.jpg" alt="" style=" margin-top:-130px; width:100px;">
    <h2 style= "margin-top:-29px;">Academic & Education</h2>
    <p><i>Academic" Education is generally defined as education which has learning as it's primary purpose.</i></p>
    <ul>
    <a href = "history.php"> <li style= "font-size:18px; color:white;" > <img src="images/cat/his.jpg" alt="" style="width:40px"> History  </li></a>
    <br>
     <a href = "econ.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/eco.jpg" alt="" style="width:40px"> Economic </li> </a>
     <br>
     <a href = "geography.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/geo.jpg" alt="" style="width:40px"> Geography </li> </a>
     <br>
     <a href = "psycology.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/psy.jpg" alt="" style="width:40px">Psychology </li> </a>
     <br>
     <a href = "sociology.php">  <li style= "font-size:18px; color:white;"> <img src="images/cat/soc.jpg" alt="" style="width:40px"> Sociology</li> </a>
    </ul>
</div>

  <div class="column" style="background-color:#6159b5;">
  <img src="images/cat/bio.png" alt="" style="margin-top:-130px; width:100px">
    <h2 style= "margin-top:-15px;">Biography</h2>
    <p><i> A biography, or simply bio, is a detailed description of a person's life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person's experience of these life events.</i></p>
     <ul>
    <a href = "bio.php"> <li style= "font-size:18px; color:white;" > <img src="images/cat/b.jpg" alt="" style="width:40px"> Bio  </li></a>
</ul>
</div>
</div>



<div class="row">
  <div class="column" style="background-color:#b5b059;">
  <img src="images/cat/tec.jpg" alt="" style="margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Technology</h2>
    <p><i> Technology can be most broadly defined as the entities, both material and immaterial, created by the application of mental and physical effort in order to achieve some value. In this usage, technology refers to tools and machines that may be used to solve real-world problems. </i></p>
    <ul>
    <a href = "soft.php"> <li style= "font-size:18px; color:white;" > <img src="images/cat/soft.jpg" alt="" style="width:40px"> Software </li></a>
    <br>
     <a href = "hard.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/hard.jpg" alt="" style="width:40px"> Hardware</li> </a>
     <br>
     <a href = "internet.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/int.jpg" alt="" style="width:40px"> Internet </li> </a>
     <br>
     <a href = "web.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/web.jpg" alt="" style="width:40px">Web Design </li> </a>
     <br>
     <a href = "pro.php">  <li style= "font-size:18px; color:white;"> <img src="images/cat/pro.jpg" alt="" style="width:40px"> Programming</li> </a>
    </ul>
  </div>

  <div class="column" style="background-color:#6eb559;">
  <img src="images/cat/per.jpg" alt="" style=" margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Personal growth</h2>
    <p><i> Personal development is also known as self-development or personal growth. It involves the growth and enhancement of all aspects of the person, the feelings the person has about himself or herself, and their effectiveness in living</i></p>
    <ul>
    <a href = "spiritual.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/sp.jpg" alt="" style="width:40px"> Spiritualty </li></a>
    <br>
     <a href = "self-imp.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/si.jpg" alt="" style="width:40px"> Self-improvement</li> </a>
     <br>
     <a href = "relationship.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/rel.png" alt="" style="width:40px"> Relationships</li> </a>
     <br>

</div>
</div>


<div class="row">
  <div class="column" style="background-color:#924944;">
  <img src="images/cat/rel.png" alt="" style=" margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Religion</h2>
    <p><i> Religion is an organized collection of beliefs, cultural systems, and world views that relate humanity to an order of existence. Many religions have narratives, symbols, and sacred histories that are intended to explain the meaning of life and/or to explain the origin of life or the Universe.</i></p>
    <ul>
    <a href = "religion.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/rel2.jpg" alt="" style="width:40px"> Religions  </li></a>
</ul>
</div>

  <div class="column" style="background-color:#4a9644;">
  <img src="images/cat/art.jpg" alt="" style="margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Art</h2>
    <p><i>Art is generally understood as any activity or product done by people with a communicative or aesthetic purpose—something that expresses an idea, an emotion or, more generally, a world view. It is a component of culture, reflecting economic and social substrates in its design</i></p>
    <ul>
    <a href = "phptography.php"> <li style= "font-size:18px; color:white;" > <img src="images/cat/photo.jpg" alt="" style="width:40px"> Photography</li></a>
    <br>
     <a href = "painting.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/paint.jpg" alt="" style="width:40px"> Painting & Drawing</li> </a>
     <br>
     <a href = "music.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/music.jpg" alt="" style="width:40px"> Music</li> </a>
     <br>
     <a href = "craft.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/craft.jpg" alt="" style="width:40px"> Craft & Hobbies </li> </a>
</div>
</div>


<div class="row">
  <div class="column" style="background-color:#446192;">
  <img src="images/cat/health.png" alt="" style="margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Health & Fitness</h2>
    <p><i> Regular exercise improves health and fitness. Health is defined as a state of complete mental, physical and social well-being; not merely the absence of illness or infirmity. Fitness is the ability to meet the demands of the environment.</i></p>
    <ul>
    <a href = "medical.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/med.jpg" alt="" style="width:40px"> Medical</li></a>
    <br>
     <a href = "diet.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/fit.jpg" alt="" style="width:40px"> Fitness & Diet</li> </a>
     <br>
     <a href = "food.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/food.jpg" alt="" style="width:40px">Food & Nutrition</li> </a>
     <br>

</div>

  <div class="column" style="background-color:#2f8a8e;">
  <img src="images/cat/env.jpg" alt="" style=" margin-top:-130px; width:100px">
    <h2 style= "margin-top:-29px;">Environment</h2>
    <p><i> The physical environment is where individuals live, learn, work, and play. People interact with their physical environment through the air they breathe, water they drink, houses they live in, and the transportation they access to travel to work and school</i></p>
    <ul>
    <a href = "environment.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/en.jpeg" alt="" style="width:40px"> Envi  </li></a>
</ul>
</div>
</div>


<div class="row">
  <div class="column" style="background-color:#da68c7;">
  <img src="images/cat/pl.jpg" alt="" style=" margin-top:-135px; width:100px">
    <h2 style= "margin-top:-29px;" >Politics & Law</h2>
    <p><i>Politics is the way that people living in groups make decisions.In everyday life, the term "politics" refers to the way that countries are governed, and to the ways that governments make rules and laws</i></p>
    <ul>
    <a href = "pol.php"> <li  style= "font-size:18px; color:white;"> <img src="images/cat/pol.png" alt="" style="width:30px"> Politics </li></a>
    <br>
     <a href = "law.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/law.jpg" alt="" style="width:30px">Law</li> </a>
     <br>
  </div>

  <div class="column" style="background-color:#d4bf9b;">
  <img src="images/cat/lit.jpg" alt="" style=" margin-top:-135px; width:100px;">
    <h2 style= "margin-top:-18px;">Fiction & Literature</h2>
    <p><i>This particular branch of literature consists of stories, novels, and dramas based on made-up and fabricated stories and characters. Fiction contains certain symbolic and thematic features known as “literary merits.” In other words, fiction narrates a story, which aims at something bigger than merely a story. </i></p>
    <ul>
    <a href = "classic lit.php"> <li style= "font-size:18px; color:white;"> <img src="images/cat/clas.jpg" alt="" style="width:40px">Classic Literature</li></a>
    <br>
     <a href = "science fiction.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/hor.jpg" alt="" style="width:40px"> Science & Fiction</li> </a>
     <br>
     <a href = "crime.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/drama.jpg" alt="" style="width:40px">Mystery & Crime</li> </a>
     <br>
     <a href = "poet.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/poet.jpg" alt="" style="width:40px">Poetry</li> </a>
     <br>
     <a href = "romance.php"> <li style= "font-size:18px; color:white;">  <img src="images/cat/romance.jpg" alt="" style="width:40px">Romance</li> </a>
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
