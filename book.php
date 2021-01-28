<?php
include "connection.php";
include "topnav.php";
?>

<html>
<head>

<title>Books</title>

</head>
<body>
<h2>List of books</h2>
<br>
<br>
<?php
 $res = mysqli_query($db,"SELECT *FROM `book` ORDER BY `book`. `bname` ASC; ");
 echo "<table class = 'table table-borderd table-hover'>";   //show data inside table
 echo  "<tr style = 'background-color: green;'>";           // table raw styles

 echo "<th>"; echo "id"; echo "</th>";

 echo "<th>"; echo "name"; echo "</th>";

 echo "<th>"; echo "blevel"; echo "</th>";

 echo "</th>"; echo "authors"; echo "</th>";

 echo "<th>"; echo "Medium"; echo "</th>";

 echo "</tr>";	

 while($row = mysqli_fetch_assoc($res))
 {
     echo "<tr>";
     echo "<td>"; echo $row['bid']; echo "</td>";
     echo "<td>"; echo $row['bname']; echo "</td>";
     echo "<td>"; echo $row['blevel']; echo "</td>";
     echo "<td>"; echo $row['authors']; echo "</td>";
     echo "<td>"; echo $row['Medium']; echo "</td>";
     

     echo "</tr>";
 }
echo "</table>";	

?>


</body>
</html>