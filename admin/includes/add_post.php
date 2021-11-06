<?php
  if(isset($_POST['create_post'])){
    $desc = $_POST['desc'];
    
    
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $post_date = date('d-m-y');

    move_uploaded_file($image_temp,"../post_img/$image");

    $query = "INSERT INTO works(image, description, date) ";
    $query .= "VALUES('$image','$desc',now() ) ";

    $result = mysqli_query($connection, $query);

    confirm($result);
  } 



?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Image Description</label>
    <input type="text" class="form-control" name="desc">
  </div>
  <div class="form-group">
    <label for="post_image">Image</label>
    <input type="file" name="image">
  </div>


  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Post Image">
  </div>
</form>