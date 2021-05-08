<?php
  session_start();
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">  as my bootsrap links are not working i used this method -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >-->
        <link rel = "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src = "https://ajax.gooleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type = "text/css">
            .container-fluid {
                display: flex;
                background-color: #060505;
                justify-content: space-between;
            }
            .navbar-header {
               display: flex;
                flex-direction: column; 
                margin-left: -10px;
            }
             .logo-header {
                color: rgb(255 255 255);
                font-weight: 700;
                
            }
            .logo{
               
                float: left;
                /*padding-top: 5px; */
                
            } 
            .logo img{
                height: 90px;
                width:  400px;
               
            } 

            @media screen and (max-width: 768px) {

                .logo img{
                  
                height: 90px;
                width:  200px;
               
            } 
                .navbar-header {
                display: flex;
                flex-direction: column;
                
                
            }  
                .navbar-nav {
                    display: none;
                }
                .nav .navbar-nav .show {
                    display: block;
                }
                .icon-drop {
                }
            }
            @media screen and (min-width: 768px) {
                .logo img{
                   
                height: 90px;
                width:  400px;
               
            } 
                .icon-drop {
                    display: none;
                }
                .glyphicon-log-in {
                	margin-left: 10vw;
                }
            }

            .dropbtn {
                background-color: black;
                color: white;
                padding: 15px;
                font-size: 15px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                /*background-color: #2980B9;  */
                background-color:#0c0c0c;
            }

            .navbar-inverse .navbar-nav>li>a {
                color: rgb(255 255 255);
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {
                background-color: #ddd;
            }

            .show {
                display: block;
            }  
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" >
            <div class="container-fluid">
                <div class="navbar-header">
                   <div class="logo">
                        <!--<h6 class="logo-header"  style="color: white; font-size: 16px; line-height: 21px; margin-top: 2px;  font-style: italic">Find the next book in your list</h6> -->
                     <img class = "img"  src="images/e.png" > 
                     
          <!-- <a class="navbar-brand active" href="index.php" style= "color: blue;  margin-top: 7px;   font-size: 25px; " >E-BOOK STORE</a> -->
                </div>
                </div>
                <a href="javascript:void(0);" class="icon icon-drop" onclick="responsiveFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="nav navbar-nav" id="myTopnav">
                    <li><a href="index.php" style= "margin-top: 13px;  font-size: 17px;">HOME</a></li>
                    <li><a href="feedback.php" style= "margin-top: 13px;  font-size: 17px;">FEEDBACK</a></li>
                    <li><a href="book1.php" style= "margin-top: 13px;  font-size: 17px;">BOOKS</a></li>
                    <!--<li><a href="feedback.php"   style= "margin-top: 15px;  font-size: 15px;">CATEGORY </a> -->
                    <li>
                        <div class="dropdown" style= "margin-top: 13px;  font-size: 15px;">
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
                                <li><a href = "profile.php" style= "margin-top:13px; margin-left: 10px;  font-size: 15px;">PROFILE</a></li>
                                <li> <a href = "chatnew.php" style= "margin-top: 13px; margin-left: 180px;"> <span class = "glyphicon glyphicon-envelope">&nbsp<span class = "badge bg-green">
                                    </span></a>
                                </li>
                                <li> <a href = "profile.php" style= "margin-top: 13px;">
                                    <div style ="color: white">
                                    <?php
                                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/p.jpg ".$_SESSION['pic']."'>";
                                        echo "" .$_SESSION['login_user'];
                                    ?>
                                    </div>	
                                    </a>
                                </li>
                                <li><a href="logout.php" style= "margin-top: 13px;  font-size: 15px;"><span class = "glyphicon glyphicon-log-out">LOGOUT</span></a></li>
                            <?php  
                            }
                        else   //if a user not login then show login &sign up option
                        { ?>
                                <li><a href="login.php" ><span class = "glyphicon glyphicon-log-in" style= "margin-top: 13px;  font-size: 15px;">LOGIN</span></a></li>	
                                <li><a href="register.php"><span class = "glyphicon glyphicon-user" style= "margin-top: 13px;  font-size: 15px;">SIGNUP</span></a></li>
                        <?php
                        } 
                        ?> 
                </ul>
            </div>
        </nav>
        <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
                }
            }
            }
            //responsive dropdown
            function responsiveFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "nav navbar-nav") {
                    x.className += " show";
                } else {
                    x.className = "nav navbar-nav";
                }
            }
        </script>
    </body>
</html>