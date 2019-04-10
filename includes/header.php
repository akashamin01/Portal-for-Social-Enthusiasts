<?php
include("config.php");
include("db.php");
$query="SELECT * FROM categories";
$categories = $db->query($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AKASH AMIN & JIL KACHHIA">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>COMMUNITY FORUM</title>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">

    
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php if(isset($_GET['category'])){?>

      <?php }else {?>

        <?php }?>

      <?php   while($row = $categories->fetch_assoc()) {
      ?>
        <a class="p-2 text-muted" href="index.php?category=<?php echo $row['id']?>"> <?php echo $row['category']; ?></a>

    <?php  } ?>


    </nav>
    <hr>
  </div>
