<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: left;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  
<a href="index.php" >HOME</a>
                    <a href="feedback.php" >FEEDBACK</a>
                    <a href="book1.php" >BOOKS</a>
                    <!--<li><a href="feedback.php"   style= "margin-top: 15px;  font-size: 15px;">CATEGORY </a> -->
                    <li>
                        <div class="dropdown" style= "margin-top: 7px;  font-size: 15px;">
                            <button onclick="myFunction()" class="dropbtn">CATEGORY </button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="nextpagelife.php">Life Style</a>
                                <a href="nextpagechildren.php">Children & Youth</a>
                                <a href="nextpageacademic.php">Academic & Education</a>
                                <a href="nextpagebio.php">Biography</a>
                                <a href="nextpagetechnology.php">Technology</a>
                                <a href="nextpagepersonal.php">Personal Growth</a>
                                <a href="nextpagereligion.php">Religion</a>
                                <a href="nextpageart.php">Art</a>
                                <a href="nextpagehealth.php">Health & Fitness</a>
                                <a href="nextpageenvi.php">Environment</a>
                                <a href="nextpagepoli.php">Politics & Law</a>
                                <a href="nextpagefic.php">Fiction & Literature</a>
                            </div>
                        </div>
                    </li>
                    <?php
                        if(isset($_SESSION['login_user']))   
                        {  ?>
                                <a href = "profile.php" style= "margin-top:13px; margin-left: 10px;  font-size: 15px;">PROFILE</a>
                                <a href = "chatnew.php" style= "margin-top: 13px; margin-left: 180px;"> <span class = "glyphicon glyphicon-envelope">&nbsp<span class = "badge bg-green">
                                    </span></a>
                            
                                <a href = "profile.php" style= "margin-top: 13px;">
                                    <div style ="color: white">
                                    <?php
                                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/p.jpg ".$_SESSION['pic']."'>";
                                        echo "" .$_SESSION['login_user'];
                                    ?>
                                    </div>	
                                    </a>
                                <
                            <a href="logout.php" style= "margin-top: 13px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-out">LOGOUT</span></a>
                            <?php  
                            }
                        else   //if a user not login then show login &sign up option
                        { ?>
                                <a href="login.php" ><span class = "glyphicon glyphicon-log-in" style= "margin-top: 13px;  font-size: 15px;">LOGIN</span></a>	
                               <a href="register.php"><span class = "glyphicon glyphicon-user" style= "margin-top: 13px;  font-size: 15px;">SIGNUP</span></a>
                        <?php
                        } 
                        ?> 
                </ul>
            </div>
        </nav>

<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</div>

</body>
</html>
