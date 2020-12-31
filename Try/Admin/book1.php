<?php
  include "connection.php";
  include "topnav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>

<div>
    <form class = "topnav-form" method = "post" name = "formal">
        <div>
            <input class = "form-control" type = "text" name = "search" placeholder= "search books...">
            <button style = "background color: blue;" type  = "submit" name = "submit" class = "btn btn-default">
            <span class = "glyphicon glyhicon"></span>
</button>
</div>
</form>
</div>
	<h2>List Of Books</h2>
	<?php

		$res=mysqli_query($db,"SELECT * FROM `book` ORDER BY `book`.`bname` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: blue;' ,border = 'black'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Book -Level";  echo "</th>";
				echo "<th>"; echo "Author";  echo "</th>";
				echo "<th>"; echo "Medium";  echo "</th>";
                
                
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bname']; echo "</td>";
				echo "<td>"; echo $row['blevel']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['Medium']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>"
;	?>
</body>
</html>