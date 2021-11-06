<?php
if (isset($_GET['p_id'])) {
  $p_id = $_GET['p_id'];


  $query = "SELECT * FROM works WHERE id = $p_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $image = $row['image'];
    $desc = $row['description'];
  }
}
if (isset($_POST['update_post'])) {
  $desc = $_POST['desc'];
    
    
  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];

  move_uploaded_file($image_temp,"../post_img/$image");


  if (empty($image)) {
    $image_query = "SELECT * FROM works WHERE id = $p_id ";
    $selected_image = mysqli_query($connection, $image_query);

    while ($row = mysqli_fetch_assoc($selected_image)) {
      $image = $row['image'];
    }
  }

  $query = "UPDATE `works` SET `image` = '$image', `description` = '$desc', `date` = now() WHERE `works`.`id` = $p_id;";

  $update_post = mysqli_query($connection, $query);

  confirm($update_post);
}
?>

  



<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Image Description</label>
    <input type="text" class="form-control" value="<?php echo $desc; ?>" name="desc">
  </div>
 <div class="form-group">
    <label for="post_image"> Post Image</label>

    <img width="100" src="../post_img/<?php echo $image ?>" style="display: block; margin-bottom: 1rem;" alt="">

    <input type="file" name="image">
  </div>


  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Update Image">
  </div>
</form>