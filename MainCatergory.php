<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
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
</style>
</head>
<body>

<h2>List View or Grid View</h2>
<p>Click on a button to choose list view or grid view.</p>

 <!--<div id="btnContainer">
 <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i>  LIST</button>
</div>  -->
<br>
<div class="row">
  <div class="column" style="background-color:#aaa;">
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

  <div class="column" style="background-color:#bbb;">
  <img src="images/cat/cy.jpg" alt="" style="width:100px">
    <h2>Children & Youth</h2>
    <p><i> 'youth', as those persons between the ages of 15 and 24 years, without prejudice to other definitions by Member States.therefore, children are those persons under the age of 14</i></p>
    <ul>
    <a href = "par.php"> <li > <img src="images/cat/par.jpg" alt="" style="width:50px"> Parenting  </li></a>
    <br>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
  <img src="images/ac.jpg" alt="" style="width:100px">
    <h2>Academic & Education</h2>
    <p><i>Academic" Education is generally defined as education which has learning as it's primary purpose.</i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/his.jpg" alt="" style="width:40px"> History  </li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/eco.jpg" alt="" style="width:40px"> Economic </li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/geo.jpg" alt="" style="width:40px"> Geography </li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/psy.jpg" alt="" style="width:40px">Psychology </li> </a>
     <br>
     <a href = "fashion.php">  <li> <img src="images/cat/soc.jpg" alt="" style="width:40px"> Sociology</li> </a>
    </ul>
</div>

  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/bio.png" alt="" style="width:100px">
    <h2 >Biography</h2>
    <p><i> A biography, or simply bio, is a detailed description of a person's life. It involves more than just the basic facts like education, work, relationships, and death; it portrays a person's experience of these life events.</i></p>
     <ul>
    <a href = "bio.php"> <li > <img src="images/cat/b.jpg" alt="" style="width:40px"> Bio  </li></a>
</ul>
</div>
</div>



<div class="row">
  <div class="column" style="background-color:#ccc;">
  <img src="images/cat/tec.jpg" alt="" style="width:100px">
    <h2>Technology</h2>
    <p><i> Technology can be most broadly defined as the entities, both material and immaterial, created by the application of mental and physical effort in order to achieve some value. In this usage, technology refers to tools and machines that may be used to solve real-world problems. </i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/soft.jpg" alt="" style="width:40px"> Software </li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/hard.jpg" alt="" style="width:40px"> Hardware</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/int.jpg" alt="" style="width:40px"> Internet </li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/web.jpg" alt="" style="width:40px">Web Design </li> </a>
     <br>
     <a href = "fashion.php">  <li> <img src="images/cat/pro.jpg" alt="" style="width:40px"> Programming</li> </a>
    </ul>
  </div>

  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/per.jpg" alt="" style="width:100px">
    <h2>Personal growth</h2>
    <p><i> Personal development is also known as self-development or personal growth. It involves the growth and enhancement of all aspects of the person, the feelings the person has about himself or herself, and their effectiveness in living</i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/sp.jpg" alt="" style="width:40px"> Spiritualty </li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/si.jpg" alt="" style="width:40px"> Self-improvement</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/rel.png" alt="" style="width:40px"> Relationships</li> </a>
     <br>

</div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
  <img src="images/cat/rel.png" alt="" style="width:100px">
    <h2>Religion</h2>
    <p><i> Religion is an organized collection of beliefs, cultural systems, and world views that relate humanity to an order of existence. Many religions have narratives, symbols, and sacred histories that are intended to explain the meaning of life and/or to explain the origin of life or the Universe.</i></p>
  </div>

  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/art.jpg" alt="" style="width:100px">
    <h2>Art</h2>
    <p><i>Art is generally understood as any activity or product done by people with a communicative or aesthetic purpose—something that expresses an idea, an emotion or, more generally, a world view. It is a component of culture, reflecting economic and social substrates in its design</i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/photo.jpg" alt="" style="width:40px"> Photography</li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/paint.jpg" alt="" style="width:40px"> Painting & Drawing</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/music.jpg" alt="" style="width:40px"> Music</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/craft.jpg" alt="" style="width:40px"> Craft & Hobbies </li> </a>
</div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
  <img src="images/cat/health.png" alt="" style="width:100px">
    <h2>Health & Fitness</h2>
    <p><i> Regular exercise improves health and fitness. Health is defined as a state of complete mental, physical and social well-being; not merely the absence of illness or infirmity. Fitness is the ability to meet the demands of the environment.</i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/med.jpg" alt="" style="width:40px"> Medical</li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/fit.jpg" alt="" style="width:40px"> Fitness & Diet</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/food.jpg" alt="" style="width:40px">Food & Nutrition</li> </a>
     <br>

</div>

  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/env.jpg" alt="" style="width:100px">
    <h2>Environment</h2>
    <p><i> The physical environment is where individuals live, learn, work, and play. People interact with their physical environment through the air they breathe, water they drink, houses they live in, and the transportation they access to travel to work and school</i></p>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/pl.jpg" alt="" style="width:100px">
    <h2>Politics & Law</h2>
    <p><i>Politics is the way that people living in groups make decisions.In everyday life, the term "politics" refers to the way that countries are governed, and to the ways that governments make rules and laws</i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/pol.png" alt="" style="width:30px"> Politics </li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/law.jpg" alt="" style="width:30px">Law</li> </a>
     <br>
  </div>

  <div class="column" style="background-color:#ddd;">
  <img src="images/cat/lit.jpg" alt="" style="width:100px">
    <h2>Fiction & Literature</h2>
    <p><i>This particular branch of literature consists of stories, novels, and dramas based on made-up and fabricated stories and characters. Fiction contains certain symbolic and thematic features known as “literary merits.” In other words, fiction narrates a story, which aims at something bigger than merely a story. </i></p>
    <ul>
    <a href = "fashion.php"> <li > <img src="images/cat/clas.jpg" alt="" style="width:40px">Classic Literature</li></a>
    <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/hor.jpg" alt="" style="width:40px"> Horror</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/drama.jpg" alt="" style="width:40px">Drama</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/poet.jpg" alt="" style="width:40px">Poetry</li> </a>
     <br>
     <a href = "fashion.php"> <li>  <img src="images/cat/romance.jpg" alt="" style="width:40px">Romance</li> </a>
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
