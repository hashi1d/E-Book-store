


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
                <h1 class="h1"> Environment</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/tiger.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2 class="h2"> The Tiger: A True Story of Vengeance and Survival</h2>
                <p class="p"> <I>  A gripping story of man pitted against nature's most fearsome and efficient predator. Outside a remote village in Russia's Far East a man-eating tiger is on the prowl. The tiger isn't just killing people, it's murdering them, almost as if it has a vendetta.</I> </p>
                <p class="p1"> Details about the book: <br>  Author: John Wiliyan </p>
                <span> More text about the book: </span>
                <a href = "books for the web/The Tiger_ A True Story of Vengeance and Survival ( PDFDrive ).pdf">
                <button> Read it</button>
                </a>
                </div>
</div>


            <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/braindin.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2 class="h2">Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants</h2>
                <p class="p"> <i>Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge, and the Teachings of Plants is a 2013 nonfiction book written by Indigenous author Robin Wall Kimmerer and published by Milkweed. The book is about the world of botany as described and explored through Native American traditions.</i> </p>
                <p class="p1"> Details about the book:  <br>   Author: Robin Wall</p>
                <span> More text about the book: </span>
                <a href = "books for the web/Braiding Sweetgrass_ Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants ( PDFDrive ).pdf">
                <button> Read it</button>
                </a>
            </div>
</div>

<div class = "container2">
<div class= "book2">        
<div class = "rate" style ="margin-top: -356px;">
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
  <img src = "images/rate.jpg"  alt= ""  /> 
  <br>
  <br>
            <p style= "color: #fff;"> Your Preferance is a good addition to keep smashing books in our store. <br> Click here &  exchange your experience about the books with others.. <br>
        THANK YOU & KEEP READING......</p>
            <a href = "rating/ratingenvi.php">
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



