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
                <h1 class="h1"> Home & Garden </h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/hand.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2 class = "h2">  Handbook of Medicinal Herbs</h2>
                <p class = "p"> <I>  Take care of yourself. Eating healthy and staying active is a great way to stay connected to yourself and your higher power, whether that's God, the Universe, or simply your own internal guidance system. When we allow our internal systems (physical, mental, emotional, and spiritual) to become clogged and bogged down by lethargy and unnatural substances, we block the opportunity for spiritual growth and eventual awakening. Keep your body clean and clear by feeding it well and moving it often, and prepare to receive the messages you seek.</I> </p>
                <p class = "p1"> Details about the book: <br>  Author: James A dukie </p>
                <span> More text about the book: </span>
                <a href = "books for the web/Handbook of Medicinal Herbs ( PDFDrive ).pdf">
                <button> Read it</button>
                </a>
                
            </div>
</div>


            <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/teach.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2 class = "h2"> Teaching Organic Farming & Gardening </h2>
                <p class = "p"> <i>Organic farming – alternative agricultural system that relies on fertilizers of organic origin such as compost, manure, green manure, and bone meal and places emphasis on techniques such as crop rotation and companion planting.</i> </p>
                <p class = "p1"> Details about the book: 
                      English Version  </p>
                <span> More text about the book: </span>
                <a href = "books for the web/TOFG-all.pdf">
                <button> Read it</button>
                </a>
            </div>


         
</div>


<div class = "container2">
<div class= "book2">
<div class = "rate" style ="margin-top: -460px;">
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  <img src = "images/rate.jpg"  alt= ""  /> 
  <br>
  <br>
            <p style= "color: #fff;"> Your Preferance is a good addition to keep smashing books in our store. <br> Click here &  exchange your experience about the books with others.. <br>
        THANK YOU & KEEP READING......</p>
            <a href = "rating/ratinghome.php">
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