<<<<<<< HEAD
<?php


?>

<form method = "POST" enctype= "mulipart/form-data" action = "upload.php">
<input type = "file" name ="file">
<input type = "submit" value = "upload">
</form>

<?php

// creating a file to uplaod
//display all upld files


$files = scandir("books for the web");
for ($a = 2; $a <count ($files); $a++){
//dizply link to download
//mkrking it downodable
?>
<p>
<a href = " books for the web/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
</p>
<?php
}
=======
<?php


?>

<form method = "POST" enctype= "mulipart/form-data" action = "upload.php">
<input type = "file" name ="file">
<input type = "submit" value = "upload">
</form>

<?php

// creating a file to uplaod
//display all upld files


$files = scandir("books for the web");
for ($a = 2; $a <count ($files); $a++){
//dizply link to download
//mkrking it downodable
?>
<p>
<a href = " books for the web/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
</p>
<?php
}
>>>>>>> b9e214cde04519578bf31549b688479a75e71cc6
