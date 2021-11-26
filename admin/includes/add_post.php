<?php
if (isset($_POST['create_post'])) {
  $desc = $_POST['desc'];
  $category = $_POST['category'];

  $image = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $post_date = date('d-m-y');

  move_uploaded_file($image_temp, "../post_img/$image");

  $query = "INSERT INTO works(image, description, category, date) ";
  $query .= "VALUES('$image','$desc', '$category', now() ) ";

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
    <label for="title"> Type of Category</label>
    <select name="category">
      <option value="logo">Logo</option>
      <option value="brand">Brand</option>
      <option value="print">Print</option>
      <option value="packaging">Packaging</option>
      <option value="graphics">Graphics</option>
    </select>

  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
  </div>

</form>