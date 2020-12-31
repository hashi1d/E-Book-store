<?php
  
  include "connection.php";
  session_start();

  ?>

<html>
    <head>
        <title>Critisisum</title>
	
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
          <style type="text/css">
              body
              {
                  background-image: url("images/c.jpg");
                  background-repeat: no-repeat;
              }
              .wrapper   /*box */
              {
                  padding: 10px;
                  margin: -1px auto;   /* automatically resize the position */
                  width:900px;
                  height: 300px;
                  background-color: black;
                  opacity: .8;
                  color: white;
              } 
              .form-control     /* form styling */
              {
                  height: 50px;
                  width: 40%;
              }
              .scroll
              {
                  width: 100%;
                  height: 300px;
                  overflow: auto;
              }
      
          </style>

        </head>
        <body>
                             <!-- creating box -->
            <div class="wrapper">
                    
                <h1 style = "text-align:center ;">Critisisum Zone</h1>
                <h2 style = "text-align:center;"> Publish your openions about books</h2>
                <br>
                <br>
            
                <p style ="font-color:red;"> Providing critisisums for a book that you read is very interesting habit. These ideas are based on how reader feel about the book.and how those characters in the book move with the real lives. 
                    <br> You all are welcome to share your hidden deep ideas about these books that you read..This will be a good platform to share your thoughts and feeling about books....
                </p>
                </div>
                <br>
                <br>
                <br>
    <form style = "" action="" method="post">
        <!-- <input class="form-control" type="text" name="Book" placeholder="Book:"><br>	
      <input class="form-control" type="text" name="Author" placeholder="Author:"><br>	
        <input class="form-control" type="text" name="Medium" placeholder="Medium:"><br>	
        
        <input class="form-control" type="text" name="Status" placeholder="Status:"><br>  -->
        
        <input class="form-control" type="text" name="comment" placeholder="Share your thougts aboyt lit:"><br>

		<input class="btn btn-default" type="submit" name="submit" value="publish" style="width: 100px; height: 35px;">	
    
        
              </form> 
              </div>
              </div>
              <?php
              if(isset($_POST['submit']))
              {
                  $sql="INSERT INTO `critisisum` VALUES('', 'admin',' $_POST[comment]');" ; //session used for the person who logged
                //login_user is my session variable name
                  /* form name = to this */
                  if(mysqli_query($db,$sql))  //if thi query runs ie it the value is inserted --display this
                  {
                      $q="SELECT * FROM `critisisum` ORDER BY `critisisum`.`id` DESC";    
                      $res=mysqli_query($db,$q);   // where run the query
  
                  echo "<table class='table table-bordered'>";
                      while ($row=mysqli_fetch_assoc($res))   //fetch all the values according to query
                      {
  
                          echo "<tr>";
                          echo "<td>"; echo $row['Username']; echo "</td>"; //this is foe displying user name
                              echo "<td>"; echo $row['comment']; echo "</td>";   // give data we fetch
                          echo "</tr>";
                      }
                  echo "</table>";
                  }
  
              }
  
              else
              {
                  $q="SELECT * FROM `critisisum` ORDER BY `critisisum`.`id` DESC"; 
                      $res=mysqli_query($db,$q);
  
                  echo "<table class='table table-bordered'>";
                      while ($row=mysqli_fetch_assoc($res)) 
                      {
                          echo "<tr>";
                          echo "<td>"; echo $row['Username']; echo "</td>"; //this is foe displying user name
                              echo "<td>"; echo $row['comment']; echo "</td>";
                          echo "</tr>";
                      }
                  echo "</table>";
              }
          ?>
      </div>
      </div>

        </body>
        </html>