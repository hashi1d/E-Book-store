
<?php
  include "connection.php";
  include "topnav.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Guidlines for chat zone</h1>
  <p>Terms & Conditions for chat zone</p>
  
</div>

<h2 style="text-align:center">Learn Now!</h2>
<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2  style = "color:blue">Steps</h2>
        <p class="title"></p>
        <p>First you need to <br> sign up in the E-book store. <br> Afert signing up<br> you can enter to the chat-zone using <br>Chat tab <br> </p>
        
      </div>
    </div>
  </div>
&nbsp &nbsp
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2  style = "color:blue">Conditions</h2>
        
        <p>Chat-zone is always visited under <br>the administrator<br> Users can share their ideas with each other. But no one can't to share <br>their email or contact number <br>in the chat<br> People who are tring to pass unneccesary <br>massages will be removed from the E-book store </p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2 style = "color:blue">Rules</h2>
        
        <p>No unneccesary masseges <br>No vertual harresments for others<br> Can't share any contact details </p>
        
      </div>
    </div>
  </div>
  
  
</div>

</body>
</html>
