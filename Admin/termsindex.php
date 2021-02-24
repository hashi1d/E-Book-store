
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
  <h1>Terms of Use</h1>
  <p>This page explains the terms by which you may use our service.</p>
  
</div>

<h2 style="text-align:center">Learn Now!</h2>
<div class="row">
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Use of Our Service</h2>
        <p class="title"></p>
        <p>You  have to register in order to visit books. <br> But you can visit user<br> feedbacks , about us <br> before registering <br>After registerd you can access Fan-club ,<br> Idaa-zone, book pages , profile  <br> </p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Eligibility</h2>
        
        <p>  This Service is intended solely <br>for Users who are thirteen (13)<br> years of age or older, and any<br> registration, use or access to the Service by anyone <br>under 13 is unauthorized, unlicensed, <br>and in violation of this Agreement.</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <
      <div class="container">
        <h2>Paid Services</h2>
        
        <p>No Payments!!!! <br>The biggest benifit is we don't ask <br>credit card details before reading a book. <br>This is totally free & we are volunteering to<br> enhance the read habit among people</p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
