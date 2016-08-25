<?php
   include "check.php";
   $id = $_GET['id'];
$sql = "SELECT name, email, mobile FROM crud WHERE id=$id";
$query= mysqli_query($base,$sql);
$row = mysqli_fetch_assoc($query)

 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" type="text/css">
   </head>
   <style>
      .col-md-6{
         margin: 10px 0px;
      }
      .secondDiv{
         background: lightgray;
         width: 100%;
         height: 50px;
      }
   </style>
   <body>
      <div class="container">
         <h1>Update a Customer</h1>
         <div class="col-md-6">
            <form  action="index.php" method="post">
               <div class="col-md-6 text-right">
                  <label class="form-control-label">Name</label>
               </div>
               <div class="col-md-6">
                  <input class="form-control" type="text" name="name" value="<?= $row['name'] ?>">
               </div>
               <div class="col-md-6 text-right">
                  <label class="form-control-label">Email Address</label>
               </div>
               <div class="col-md-6">
                  <input class="form-control" type="text" name="name" value="<?= $row['email'] ?>">
               </div>
               <div class="col-md-6 text-right">
                  <label class="form-control-label">Mobile Number</label>
               </div>
               <div class="col-md-6">
                  <input class="form-control" type="text" name="name" value="<?= $row['mobil']?>">
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
