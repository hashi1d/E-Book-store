
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
  <h1>Audio Books</h1>
  <p>Find the next book in your list</p>
  
</div>

<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Privacy Settings</h2>
        <p class="title"></p>
        <p>Your name is used whatever the activity you do inside <br> the E-book store. <br> To the extent that you do not wish to have<br> your name shared in this manner, <br>you should not make use of these <br> services. You can modify, delete, and set <br>your privacy setting for information <br>you provide us any time in the Edit profile<br> section of E-book store after you have signed <br>in using your personal password.</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>E-mail</h2>
        
        <p>We may also use your e-mail address <br>to send you other messages, such as newsletters,<br> changes to features, notices of member-initiated content, or <br>special offers (“Other Messages”).<br>  </p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Children's Privacy</h2>
        
        <p>Protecting the privacy of young children is<br> especially important. For that reason,<br>  We do not knowingly collect or <br> solicit personal information from anyone <br> under the age of 13 or knowingly allow<br>  such persons to register. If you are under 13,<br>  please do not send any information about yourself to us, <br> including your name, address, telephone number,<br>  or e-mail address. <br> No one under age 13 is allowed to provide<br>  any personal information to or E-book store </p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
