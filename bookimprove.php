<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>

        <title> Book List </title>

        <link rel="stylesheet" type="text/css" href="styleforbookimp.css">
	<meta charset="utf-8">
       <!-- <style type = "text/css">
*{
    margin:0;
    padding:0;                                               /*all the elements */
    box-sizing: border-box;                    
}

.body{
    background: red;
}

.container{

    width: 96%;
    margin: 20px auto;
}

.book{

    width: 40%;
    float : left;
    background: #fff;
    margin:  5px;
    padding: 10px;

}
.icon{

    width:2px;
    float : left;
    line-height: 90px;
}
.button{
    background:green;
    border-radius:7px;
    padding:6px 6px;
    color: green;
    float: right;

}

.h1{

    text-transpose: uppercase;
    border-left: 6px solid  #labc9c;
}
        </style>

-->
    </head>
 <body>
            <div class= "container">
                <h1> Book List -novel</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/bki02.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2>  Ramayanaya</h2>
                <p> about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span>
                <a href = "books for the web/Ramayanaya.pdf">
                <button> Read it</button>
                </a>
                </div>
</div>

            <div class = "book">
                    <div class = "icon">
                        <img src = "icon.png"  alt= ""  />
                    </div>
            <div class = "content">
                <h2>  Book name</h2>
                <p> about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span>
                <button> Read it</button>
            </div>
</div>

<div class = "book">
                    <div class = "icon">
                        <img src = "icon.png"  alt= ""  />
                    </div>
            <div class = "content">
                <h2>  Book name</h2>
                <p> about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span>
                <button> Read it</button>
</div>
</div>
<div class = "book">
                    <div class = "icon">
                        <img src = "icon.png"  alt= ""  />
                    </div>
            <div class = "content">
                <h2 >  Book name</h2>
                <p > about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span>
                <button> Read it</button>
</div>
</div>
<div class = "book">
                    <div class = "icon">
                        <img src = "icon.png"  alt= ""  />
                    </div>
            <div class = "content">
                <h2>  Book name</h2>
                <p> about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span>
                <button> Read it</button>
</div>
</div>
<div class = "book">
                    <div class = "icon">
                        <img src = "icon.png"  alt= ""  />
                    </div>
            <div class = "content">
                <h2>  Book name</h2>
                <p> about the book </p>
                <p> details about the book</p>
                <span> more text about the book</span> 
                <a href = "books for the web/Ramayanaya.pdf">
                <button > Read it</button>
                </a>
</div>
</div>
</div>
</div>

            </body>


</html>