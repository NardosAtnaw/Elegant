<?php include './includes/db.php'; ?>



<?php

$query = "SELECT * FROM works ";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];
  $image = $row['image'];
  $desc = $row['description'];
?>
   
      
        <figure class="grid_item grid_item-1">
          <div class="text" style="text-align: center">
            <a href="project.html" class="view"> <?php echo $desc; ?></a>
          </div>
          <img class="grid_image" src="./post_img/<?php echo $image; ?>" alt="" />
        </figure>

        
      

<?php }
?>