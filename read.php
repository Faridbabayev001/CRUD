<?php
include "check.php";
   $id = $_GET['id'];
   $sql="SELECT name, email, mobil FROM grid WHERE id=$id";
   $query= mysqli_query($base,$sql);
   if ($query) {
      $rows = mysqli_fetch_assoc($query);
   }
 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" type="text/css">
   </head>
   <style media="screen">
      .second{
         background: lightgray;
      }
      a{
         margin: 10px;
      }
   </style>
   <body>
      <div class="container">
         <h1>Read a Customer</h1>
         <div class="col-md-3 text-right">
            <p>Name<p>
            <p>Email Address<p>
            <p>Mobile Number<p>
         </div>
         <div class="col-md-4">
            <p><?= $rows['name']?></p>
            <p><?= $rows['email']?></p>
            <p><?= $rows['mobil']?></p>
         </div>
      </div>
      <div class="container second">
         <div class="col-md-4 col-md-offset-3">
            <a class="btn btn-default" href="index.php">Back</a>
         </div>
      </div>
   </body>
</html>
