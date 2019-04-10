<?php
include("includes/header.php");
?>
<div style="text-align:center;">
  <h1>Write Your Blog</h1>
<form method="GET" action="insertblogdata.php">
<input style="width:60% ; height:50px;margin-top:55px;" name="title" type="text" placeholder="enter title"><br>
<input style="width:60% ; height:50px;margin-top:25px;" name="category" type="number" placeholder="enter category"><br>
<input style="width:60% ; height:50px;margin-top:25px;" name="author" type="text" placeholder="enter author"><br>
<input style="width:60% ; height:50px;margin-top:25px;" name="content" type="text" placeholder="enter content"><br>
<input style="width:60% ; height:50px; margin-top:25px;" type="text" name="keywords" placeholder="enter keywords"><br>
<input style="width:60% ; height:50px; margin-top:25px; margin-bottom:150px;" type="submit" value="submit">
</form>
</div>



<?php
include("includes/footer.php");
 ?>
