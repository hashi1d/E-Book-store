<?php
  include "connection.php";
  include "topnav.php";
?>

<!DOCTYPE html>
<html>
<head>

	<title>Books</title>
	<style type = "text/css">
	.srch{
		padding-left: 800px;
		padding-top : -27px;
		color: black;

	}  
     /*styling abiut side nav  */
	 body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}
</style>
	
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 
    </head>
<body>  

<div class = "srch">
    <form class = "navbar-form" method = "post" name = "form1">

        	
            <input class = "form-control" type = "text" name = "search" placeholder= "serch your book" required = ""  style ="float: left"> <!-- here flt left is for getting button near to the other srch one -->
            <button style = "background color: blue;" type  = "submit" name = "submit" class = "btn btn-default">
			<span class = "glyphicon glyhicon-search"></span>  &nbsp Search 
			
			<!--<input class = "form-control" type="text" name="search" placeholder= "search books..." required = "">
             <button type="submit"><i class="fa fa-search" ></i></button>   -->
                     

</button> 
 
</form>
</div>

<h2>List Of Books</h2>
	<?php
	if(isset($_POST['submit']))
	{
		
		$q = mysqli_query($db, "SELECT *from book WHERE bname like '%$_POST[search]%' "); //here  after & for setection categories
		if(mysqli_num_rows($q)==0)
		{
            echo "sorry! No book found..";        
		}

		else 
		{                    //when raw is found
		
		    echo "<table class='table table-bordered' >"; 
			echo "<tr style='background-color: 'yellow' ,border = '1px green','border-collapse: collapse'>";
			echo "<th>"; echo "ID";	echo "</th>";
			echo "<th>"; echo "Book-Name";  echo "</th>";
			echo "<th>"; echo "Book -Level";  echo "</th>";
			echo "<th>"; echo "Author";  echo "</th>";
			echo "<th>"; echo "Medium";  echo "</th>";
			//echo "<th>"; echo "Category";  echo "</th>";
			
				
				echo "</tr>";
				
			while($row=mysqli_fetch_assoc($q))    // data written inside while crz need to see all raws(all data)
			{
				echo "<tr>";    //inside that raw data are inserted below
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bname']; echo "</td>";
				echo "<td>"; echo $row['blevel']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['Medium']; echo "</td>";
				//echo "<td>"; echo $row['Category']; echo "</td>";
				// after srching this considerd  

				echo "</tr>";
			}
		echo "</table>";

		}

	}
	else    //if btn is not pressed
	{
		$res=mysqli_query($db,"SELECT * FROM `book` ORDER BY `book`.`bname` ASC;"); 

		echo "<table class='table table-bordered' >";    //styles using bootstarap in w3 school
			echo "<tr style='background-color: yellow;' ,border = '1px green','border-collapse: collapse'>"; // first raw is tables header
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";  
				echo "<th>"; echo "Book -Level";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Medium";  echo "</th>";
				//echo "<th>"; echo "Category";  echo "</th>";
                
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))    // data written inside while crz need to see all raws(all data)
			{
				echo "<tr>";    //inside that raw data are inserted below
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bname']; echo "</td>";
				echo "<td>"; echo $row['blevel']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['Medium']; echo "</td>";
				///echo "<td>"; echo $row['Category']; echo "</td>";
				
				 
			echo "</tr>";
			
		     }
		echo "</table>";
	}
			   //this is for delete bar 
			   if(isset($_POST['submit1']))
			   {
				   if(isset($_SESSION['login_user']))
				   {
					   mysqli_query($db,"DELETE from book where bid = '$_POST[bid]'; ");
					   ?>
						    <script type="text/javascript">
							   alert("Deleted.");
						   </script>
					   <?
				   }
				   else
				   {
								   ?>
						   <script type="text/javascript">
							   alert("Please Login First.");
						   </script>
					   <?php
				   }
			   }
 
		   ?>
         </div>  <!-- here i used all the code inside main div , bcz of that, when side nav open table gets small -->
		</body>
		</html>			