<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>

        <title> Book List</title>

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
                <h1> SINHALA LITERATURE</h1>
                 <div class = "book">
                    <div class = "icon">
                        <img src = "images/Rama.jpg"  alt= ""  />
                </div>
                <div class = "content">
                <h2>  Ramayanaya</h2>
                <p> <I>  The Ramayana is an ancient Sanskrit epic which follows Prince Rama's quest to rescue his beloved wife Sita from the clutches of Ravana with the help of an army of monkeys. It is traditionally attributed to the authorship of the sage Valmiki and dated to around 500 BCE to 100 BCE.   </I> </p>
                <p> Details about the book: <br>  Author: Valmiki <br>  Author: P.M.P Abayasinghe</p>
                <span> More text about the book: </span>
                <a href = "books for the web/Ramayanaya.pdf">
                <button> Read it</button>
                </a>
                </div>
</div>


            <div class = "book">
                    <div class = "icon">
                        <img src = "images/guru.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2> Guru Geethaya </h2>
                <p> <i>Guru Geethaya is a 2015 Sri Lankan Sinhala-language drama film based on Chinghiz Aitmatov's novel, The First Teacher (1962). ...The action takes place in the years from 1924 all the way to the early 1950s in the Kukureu village</i> </p>
                <p> Details about the book: <br> Written by: Upali Gamlath
                <br> Country: Sri Lanka
                <br>Music by: Lelum Rathnayeke</p>
                <span> More text about the book: </span>
                <a href = "books for the web/GuruGeethaya.pdf">
                <button> Read it</button>
                </a>
            </div>
</div>

                <div class = "book">
                    <div class = "icon">
                        <img src = "images/pin.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2> Pin_athi_sarasavi_warmak_denne_</h2>
                <p> <i> මහාචාර්ය එදිරිවීර සරච්චන්ද්‍රයන්ගේ ජීවිත අත්දැකීම් හෙළි කරන කෘතියකි. සරසවි වරම් ලබා ගැනීම සඳහා කතුවරයා කළ ජීවන චාරිකාවද, එම චාරිකාවේ යෙදෙද්දී ඔහු ලැබූ විසිතුරු අත්දැකීම්ද නවකතාවක් මෙන් රසවත්ව ඉදිරිපත් කර තිබේ. </i> </p>
                <p> Details about the book :
                <br>  Author: Ediriweera Sarathchandra
                </p>
                <span> More text about the book :</span>
                <a href = "books for the web/Pin_athi_sarasavi_warmak_denne_.pdf">
                <button> Read it</button>
                </a>
</div>
</div>
                <div class = "book">
                    <div class = "icon">
                        <img src = "images/ira.jpg"  alt= ""  />
                    </div>
            <div class = "content">
                <h2 >  ඉර හඳ නැඟි රට </h2>
                <p > <i>  </i> </p>
                <p> Details about the book:
                <br>  Author: Arisen Ahubhudu
                </p>
                <span> More text about the book:</span>
                <a href = "books for the web/ira hada yata.pdf">
                <button> Read it</button>
                </a>
</div>
</div>
<!--
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
-->
</div>
</div>

            </body>


</html>