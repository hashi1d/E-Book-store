
<?php
 
  
  include "connection.php";
  include "top.php";
?>
<!DOCTYPE html>
<head>

        <title> Book List</title>

       
      <link rel="stylesheet" type="text/css" href="styleforbookimp.css">  
     <meta charset="utf-8">
    </head>
 <!--<style>
       *{
    margin: 0px;
    padding:0px; 
    box-sizing: border-box;
}
      body{
    background:#585555;
   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
   width: 100%;
   height: 100%;
}

.container{
    width: 95%;
    height: 100%;
    margin: 80px auto;
    background-color: ;
    
}
.h1{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-transform: uppercase;
    border-left: 2px solid #585555;
}
.book{
width: 50%;
float : left;
background:  black;
margin:  5px;
padding: 10px;

}
.icon{

width:45%;
float : left;
line-height: 2px;


}

button{
    background: grey;
    border-radius:7px;
    padding:6px 6px;
    color:#fff;
    float: left right ;
    margin-top: 10px;
    cursor: pointer;

}

       </style>  -->
 <body>
            <div class= "container">
                <h1>LAW</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/cat/laww.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2> International Law and International Relations</h2>
                <p> <I> International Law (IL) is the set of rules generally regarded and accepted as binding in relations between states and between nations. It serves as a framework for the practice of stable and organized international relations (IR)
.</I> </p>
                <p> Details about the book: <br>  Author: Beth A Simons</p>
                <span> More text about the book: </span>
                <a href = "books for the web/International Law and International Relations.pdf">
                <button> Read it</button>
                </a>

        
</div>
</div>
</div>
<div class = "rate" style ="margin-top: -427px;">
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
              
</body>
</html>