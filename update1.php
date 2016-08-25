<?php
include "check.php";

 ?>
 <?php
 if (isset($_POST['update'])) {
    $ad = $_POST['name'];
    $email = $_POST['email'];
    $mobil = $_POST['mobil'];
    $id = $_POST['id'];
    $sql = "UPDATE grid SET name='$ad', email='$email', mobil='$mobil' WHERE id='$id'";
    $query = mysqli_query($base,$sql);
    if($query) {
      header("Location:index.php");
    }
}else {
   header("Location:update.php");
   // echo "error";
}

  ?>
