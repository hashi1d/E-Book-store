<?php
  include "connection.php";
  include "topnav.php";
     
  /*if($_GET['q'] == 'search..'){
      header('Location: srchsrch.php');
  }
if($_GET['q'] !== ''){
  $con = mysqli_connect('localhost', 'root','');
  $db = mysql_select_db('library');
*/
?>


<!DOCTYPE html>
<html>
<head>
<title> Search </title>
<link rel="stylesheet" href="srchsrch.css">
<script type="text/javascript">
function active (){
    var searchBar = document.getElementById("searchBar");
    if(searchBar.value= 'Search...'){
        searchBar.value=''
        searchBar.placeholder ='search...'
    }
}

function inactive (){
    var searchBar = document.getElementById("searchBar");
    if(searchBar.value= ''){
        searchBar.value='Search...'
        searchBar.placeholder =''
    }
}
</script>
</head>
<body>
    <form action="search.php" method="GET"  > 
        
        <input type = "text" name = "q"  id= "searchBar" placeholder="search" autocomplete="off" onmousedown="active();" onblur="inactive();"/><input type = "submit" id= "searchBtn" value="Go!"/>
    </form>

    <?php
     if(!isset($q)){

        echo '';
     }else{
    $query = mysql_query("SELECT * FROM book WHERE bid  LIKE '%$q% '  OR bname LIKE '%$q% ' OR blevel LIKE '%$q%' OR   authors LIKE '%$q% ' OR Medium  LIKE '%$q% ' OR Category LIKE '%$q% ' OR Count  LIKE '%$q% ' ");
    $num_rows = mysql_num_rows($query);
    ?>
    <p><strong><?php echo $num_rows; ?> </strong>result for '<?php echo $q ; ?>' </p>
    <?php

    while($row = mysql_fetch_array($query)){
        $id = $row['bid'];
        $name = $row['bname'];
        $blevel = $row['blevel'];
        $authors = $row['authors'];
        $Medium = $row['Medium'];
        $Category = $row['Category'];
        $Count = $row['Count'];

        echo '<h3>' . $id . '<h3><p>' . $name . '<h3><p>' . $blevel . '<h3><p>' . $authors . '<h3><p>' . $Medium . '<h3><p>' . $Category . '<h3><p>'. $Count . '</p><br/>';

    }
     }
?>
</body>
</html>
<?php

/*else
{
    header('Location: srchsrch.php');
}*/

?>