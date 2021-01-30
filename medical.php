
<?php
  include "connection.php";
  include "top.php";
?>
<!DOCTYPE html>
<html>
<head>

        <title> Book List</title>

        <link rel="stylesheet" type="text/css" href="styleforbookimp.css">
        
      <meta name="viewport" content="width=device-width, initial-scale=1">
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


  @media only screen and (max-width: 800px) {
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
                <h1 class="h1">HEALTH & FITNESS</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/medical.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2 class = "h2"> Medical Microbiology</h2>
                <p class= "p"> <I> Medical microbiology, also known as clinical microbiology, is a subdiscipline of microbiology dealing with the study of microorganisms (parasites, fungi, bacteria, viruses, and prions) capable of infecting and causing diseases in humans
.</I> </p>
                <p class= "p1"> Details about the book: <br>  Author: F.H Kaysar</p>
                <span class= "span"> More text about the book: </span>
                <a href = "books for the web/medical-microbiology.pdf">
                <button> Read it</button>
                </a>
                </div>
              </div>

            </div>
            
            <div class = "container2">
            <div class= "book2">
            <div class = "rate" style ="margin-top: -427px;">
              &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
              &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
              <img class = "img1" src = "images/rate.jpg"  alt= ""  /> 
            
              <br>
              <br>
              
            <p class = "prate " style= "color: #fff;"> Your Preferance is a good addition to keep smashing books in our store. <br> Click here &  exchange your experience about the books with others.. <br>
        THANK YOU & KEEP READING......</p>
            <a href = "rating/ratinghome.php">
            <br>
            <br>
            
              <button class = "b" style = "color: yellow;"> RATE HERE</button>
                </a>
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                <a href = "MainCatergory.php">
                <button class = "b1" style = "color: yellow;"> GO BACK</button>
                </a>

</div>     
</div>
</div>
</div>
 </body>
</html>