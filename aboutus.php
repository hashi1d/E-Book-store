<?php
include "topnav.php";
include "connection.php";

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="aboutStyles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
              body
              {
                  background-image: url("images/about.jpg");
                  
              }
           
              .aboutsec
              {
                  display: none;
                  padding: 30px;
                  margin: -1px auto;   /* automatically resize the position */
                  width:900px;
                  height: 1100px;
                  background-color: black;
                  opacity: .8;
                  color: white;
              }

              .btn { 
            cursor: pointer; 
            border: 1px solid #3498db; 
            background-color: transparent; 
            height: 50px; 
            width: 90px; 
            color: #3498db; 
            font-size: 1.5em; 
            box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6); 
            position: right;
        } 


        .fa{
    margin: 0px 5px;
    padding:2px;  /* take text inside to the circle */
    font-size: 20px;
    width: 20px;
    height:20px;
    text-align:center;
    text-decoration:none;
    border-radius: 50%;
}
.fa:hover
{
    opacity: .7;
}
.fa-facebook{
    background:#3B5998;
    color: #fff;
}
.fa-twitter{
    background:#55ACEE;
    color: #fff;
}
.fa-google{
    background:#dd4b39;
    color: #fff;
}
.fa-instagram{
    background:#125688;
    color: #fff;
}
.fa-yahoo{
    background:#3B5998;
    color: #fff;
}

@media only screen and (min-width:280px){
    .aboutsec
              {
                  display:block;
                  padding: 30px;
                  margin: -1px auto;   /* automatically resize the position */
                  width:900px;
                  height: 1100px;
                  background-color: black;
                  opacity: .8;
                  color: white;
              }


}
        
 </style>
</head>

<body>
    <div class="aboutsec" >
    
            <h1 style = "font-size:40px; margin-left:300px"> About Us</h1>
            <br>
            <p class="text" style="color: red; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 130px; font-style: italic">
                " Something very magical can happen when you read a good book.
                     <br><h2 style="color: red; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 200px; font-style: italic">They let you travel without moving your feet"</h2>
            </p>
   
            <br> <br> 
   
            <h2  style="color: blue;margin-left: 280px;"> Why choose us? </h2>
            <ul>
                 <li style="color: green; font-size: 20px"> We are expert for finding the next book in your list. </li>
                 <li style="color: yellow; font-size: 20px "> There are Categories of books which covers large area. </li>
                  <li style="color: purple; font-size: 20px"> Feel relax to Enjoy your dream book without any cost </li>                  
                <br>
                <br>
                <br>
                
                <div style="width: 100%; display: table;">
                <div style="display: table-row; height: 100px;">
                 <div style="width: 50%; display: table-cell; background: #046b66;">
                <h2 style = "font-size: 30px; margin-left:90px"> Our Vision</h2>
                <p class="text" style="color:black ; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 20px; font-style: italic">
                To create an online book store<br> that allows users to<br> search and purchase <br>  a book based on title,<br>  author and subject.<br> The selected books are <br> displayed in a tabular format and <br>the user can view & download <br> their books online without any payment.
                </p>
                </div>
               
                <div style="width: 50%; display: table-cell; background: #a5a005;"> 
                <h2 style = "font-size: 30px; margin-left:130px"> Our Mission</h2>
                <p class="text" style="color: black; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 20px; font-style: italic">
                To provide quality<br> but affordable books for <br>  education, entertainment, self-development <br>  and self-fulfillment; <br> to all when the need arises by<br>  Providing a wide range of <br> books to satisfy our clients.
                </p>
                </div>
                </div>
                </div>
                
                <div style="width: 50%; display: table-cell; background: #d492cf;">
                <h2 style = "font-size: 30px; margin-left:90px"> Our Promise</h2>
                <p class="text" style="color: black; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 20px; font-style: italic">
                    We deliver optimistic & diverse <br> books to our audience of smart ,<br> curious book lovers
                </p>
                </div>

                
                
           
                <div style="width: 50%; display: table-cell; background: #62b4e4;">
                    <h2 style = "font-size: 30px; margin-left:130px"> Our Vibe</h2>
                <p class="text" style="color: black; font-size: 20px; line-height: 21px; margin-top: -1px; margin-left: 20px; font-style: italic">

                    We dream it to create execellent book store 
    </p>
    </div>
    <br>
    <br> <br> <br>  
    <h3 style = "color: white; text-align: center; font-size:20px;"> Link us through social media</h3>
    <div style = "margin:12px 400px;" >
    <a href ="" class = "fa fa-facebook"> </a>
    <a href ="" class = "fa fa-twitter"> </a>
    <a href ="" class = "fa fa-google"> </a>
    <a href ="" class = "fa fa-instagram"> </a>
    <a href ="" class = "fa fa-yahoo"> </a>
</div>

    </div>
    
    <div>     
     </div>
    
    </div>
</body>
</html>



