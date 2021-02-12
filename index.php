
<?php
  include "t.php";
	include "connection.php";
	
?>
<!DOCTYPE html>
<html>
<title>indextry</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.fa {
  padding: 0px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


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
      <h5>Today a reader;  Tomorrow a leader!! <span class="w3-opacity"></span></h5>
    </div>

    <div class="w3-container">
      <p>This is a platform where people can find the next book in their list easily. Users can wander through their favourite books & expand their book collection easily without any cost This is a grate palce for people who know the value of books to intensify their reading habits.</p>
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
      <h6> Recomendations: Academic & Education</h6>
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
    <p><span class="w3-tag w3-black w3-margin-bottom"><a href = "aboutus.php">About Us</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href = "contactus1.php">Help</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href = "termsindex.php">Terms</a></span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href = "chatguidlinesindex.php">Chat Guidlines</a></span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom"><a href = "privacyindex.php">Privacy Policy</a></span> 
      <h4>Connet</h4>

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
     
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>



</body>
</html>
