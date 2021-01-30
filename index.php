
<?php
include "topforindex.php";
	include "connection.php";
	
?>
<!DOCTYPE html>
<html>
<title>indextry</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"  > 
  <h1><b> Welcome to the E-Book store</b></h1>
  <p>Find the next book in your <span class="w3-tag">list</span></p>
</header>

<!-- Grid -->
<div class="w3-row"  style= "margin-top: 8%;">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white" >
    <img src="images/bi.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>What is E-bok store?</b></h3>
      <h5>Title description, <span class="w3-opacity"></span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
       <!-- <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>-->
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/friends.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Find & Discuss Books With Your Friends</b></h3>
      <h5>Let's talk! <span class="w3-opacity"></span></h5>
    </div>

    <div class="w3-container">
      <p>It’s now easier to jump into discussions with your friends about what they’re reading. Show some love for their latest review, or challenge them to defend why they couldn’t stand your favorite book!</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <!--<div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
        </div>-->
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/ins.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Inspire Me!</b></h4>
      <p>Looking for book recommendations? There's something here for you,</p>
      <h6> Recomendations: </h6>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Categories</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="images/cat/his.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Academic & Education</span><br>
        <span>Academic" Education is generally defined as education which has learning as it's primary purpose.</span>
      </li>
      <li class="w3-padding-16">
        <img src="images/cat/fit.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Health & Fitness</span><br>
        <span>Fitness is the ability to meet the demands of the environment.</span>
      </li> 
      <li class="w3-padding-16">
        <img src="images/cat/art.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Art</span><br>
        <span>Art is generally understood as any activity or product done by people with a communicative or aesthetic purpose.</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="images/cat/soft.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Technology</span><br>
        <span>Technology can be most broadly defined as the entities, both material and immaterial, created by the application of mental and physical effort in order to achieve some value.</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <!--<button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>  -->
  <?php
			include "foter.php";	
			?>
</footer>

</body>
</html>
