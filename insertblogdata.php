<?php

$title=$_GET['title'];
$category=$_GET['category'];
$author=$_GET['author'];
$content=$_GET['content'];
$keywords=$_GET['keywords'];
echo $title;
 define("DB_HOST" , "localhost");
 define("DB_USER" , "root");
 define("DB_PASS" , "");
 define("DB_NAME" , "blogcms");

  $db = new mysqli(DB_HOST , DB_USER , DB_PASS , DB_NAME);

$sql= "INSERT INTO posts (title, category, author, body, keywords)
					 VALUES ('$title','$category','$author','$content','$keywords');";
mysqli_query($db,$sql);
?>
