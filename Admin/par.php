
<?php
  include "connection.php";
  include "top.php";
?>
<!DOCTYPE html>
<html>
<head>

        <title> Book List</title>

        <link rel="stylesheet" type="text/css" href="styleforbookimp.css">
    <meta charset="utf-8">
    </head>
    <style>
  body{
   background:#585555;
   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
   width: 100%;
   height: 100%;
}
.container{
    width: 96%;
    margin: 80px auto;
    background-color: rgb(84, 84, 175);
    
}
.book{

width: 50%;
float : left;
background: grey;
margin:  5px;
padding: 10px;

}


  @media only screen and (max-width: 1100px) {
    body {
      background-color: #585555;;
    }
    .container{
    width: 96%;
    margin: 80px auto;
    background-color: rgb(84, 84, 175);
    
    }
    .h1{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-transform: uppercase;
    border-left: 2px solid #585555;
    color: #fff;
}




.container .h2{

    text-align: center;
    color:red;

    }
.book{

width: 100%;
float : left;
background:black;
margin:  5px;
padding: 10px;
margin-top: 20px;

}
.p{
  text-align:center;
  font-size:17px;
  color:#fff;
}
.p1{
  font-size:17px;
}
.span{
  font-size:17px;

}
.icon{
  width:95%;
  object-position: center;
  text-align:center;
  margin-top: 5px;     
           
  
}
.container2{
    width: 96%;
    margin: 400px auto;
    text-align: center;
    background-color: rgb(84, 84, 175);
    
}

.book2{
  display:none;
  width: 100%;
  float : left;
  background:  #585555;
  margin:  5px;
  padding: 10px;
  
  }

.img1{
  display:block;
  margin: auto
}
 
.b1{
  float:left;
  
}
.content2 .prate{
  text-align:center;
  font-size: 15px;
  margin-top: 95%;
  color: #fff;
  
}


  }
  
  </style>
 <body>
            <div class= "container">
                <h1> Children & Youth</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/baby.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2 class = "h2"> On Becoming Baby Wise: Giving Your Infant the Gift of Nighttime Sleep</h2>
                <p class = "p"> <I>  The infant management plan offered by Pediatrician Robert Bucknam, M.D. and co-author Gary Ezzo in this book helps parents successfully and naturally synchronize their baby's feeding time, waketime and nighttime cycles. Both thrived on mother's milk and a basic routine, and both slept through the night by seven weeks</I> </p>
                <p class = "p1"> Details about the book: <br>  Author: Danel J </p>
                <span> More text about the book: </span>
                <a href = "books for the web/On Becoming Baby Wise_ Giving Your Infant the Gift of Nighttime Sleep ( PDFDrive ).pdf">
                <button> Read it</button>
                </a>
                </div>
</div>


            <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/child2.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2 class = "h2"> Shepherding a Child's Heart by Tedd Trip </h2>
                <p class = "p"> <i>Tedd has developed and teaches materials that encourage the people of God to understand gospel hope for the ways that human beings are pushed and pulled by the thoughts and attitudes of the heart. Shepherding a Child's Heart is about how to speak to the heart of your child</i> </p>
                <p class = "p1"> Details about the book:  <br> <br>  Author: Tedd Tripp </p>
                <span> More text about the book: </span>
                <a href = "books for the web/Shepherding a Child's Heart by Tedd Trip ( PDFDrive ).pdf">
                <button> Read it</button>
                </a>
            </div>
</div>


<div class = "container2">
<div class= "book2">
<div class = "rate" style ="margin-top: -395px;">
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  <img src = "images/rate.jpg"  alt= ""  /> 
  <br>
  <br>
            <p style= "color: #fff;"> Your Preferance is a good addition to keep smashing books in our store. <br> Click here &  exchange your experience about the books with others.. <br>
        THANK YOU & KEEP READING......</p>
            <a href = "rating/ratingpar.php">
            <br>
            <br>
                <button style = "color: yellow;"> Rate here</button>
                </a>
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                <a href = "MainCatergory.php">
                <button style = "color: yellow;"> GO BACK</button>
                </a>
</div>        
               
</div>
</div>
</div>
</div>
 </body>
</html>