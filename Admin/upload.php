<?php

// creating user upload file



$file = $_FILES["file"];


// saving files in upload folder

move_uploaded_file($file["temp_name"], "books for the web/" .$file["name"]);

//rederecting back to home

header("Location: book1.php");