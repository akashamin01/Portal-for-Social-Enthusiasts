<?php
include("includes/header.php");
if (isset($_GET['post'])) {
  $id = mysqli_real_escape_string($db , $_GET['post']);
  $query = "SELECT * FROM posts WHERE id='$id'";
}

$posts = $db->query($query);
?>



<br><br>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">


      <div class="blog-post">
        <?php if($posts->num_rows>0){
          while ($row= $posts->fetch_assoc()) {

        ?>
        <div class="blog-post">
          <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id']?>"><?php echo $row['title'];?></a></h2>
          <p class="blog-post-meta"><?php echo $row['date'];?> by <a href="#"><?php echo $row['author'];?></a></p>
          <?php echo $row['body'];

          ?>
          <hr>
        </div><!-- /.blog-post -->
        <?php } } ?>
      </div><!-- /.blog-post -->
      <blockquote><p>comments</p> </blockquote>
      <div class="comment-area">
        <form>
          <div class="form-group" >
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">comment</label>
            <textarea type="text" name="comment" class="form-control" cols="60" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">POST COMMENT</button>
        </form>
        <br><br><hr>
         <div class="comment">
           <div class="comment-head">
             <a href="#">akash amin</a>
             <img width="50" height="50" src="img/logo.jpg" />
             this is comment by akash amin
           </div>
         </div>
         <br>
         <div class="comment">
           <div class="comment-head">
             <a href="#">Richa amin</a>
             <img width="50" height="50" src="img/logo.jpg" />
             this is comment by richa amin
           </div>
         </div>
      </div>
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->
<?php
include("includes/sidebar.php");
 ?>
  </div><!-- /.row -->
</div>
</div>
</div>

</main><!-- /.container -->
<section id="Subscribesection" >
<div style="text-align: center;background:black;padding:30px;margin-Top:20px;margin-bottom:20px;">
  <hr>
  <h2 style="color:white;">Subscribe</h2>
  <br>
  <form method="post" action="">
    <input type="email" placeholder="enter your email" name="Subscribemail" style="margin-Right:20px;">
     <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
</div>
</section>

<?php
include("includes/footer.php");
 ?>
