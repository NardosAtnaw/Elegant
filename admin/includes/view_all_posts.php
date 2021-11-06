<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Image Description</th>
      <th>Image</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM works";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $image = $row['image'];
      $desc = $row['description'];
      $date = $row['date'];

      echo "<tr>";
      echo "<td>{$id}</td>";
      echo "<td>{$desc}</td>";
      echo "<td><img width='100' src='../post_img/{$image}'></td>";
      echo "<td>{$date}</td>";
      echo "<td><a href='posts.php?source=edit_post&p_id=$id'>Edit</a></td>";
      echo "<td><a href='posts.php?delete=$id'>Delete</a></td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>

<?php 

  if(isset($_GET['delete'])){
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM works WHERE id = $the_post_id";
    $result = mysqli_query($connection, $query);

    confirm($result);
    header("Location: ./posts.php");
  }



?>