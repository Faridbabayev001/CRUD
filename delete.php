<?php
include "check.php";
 ?>
   <?php if (isset($_GET["id"])) { ?>
      <!DOCTYPE html>
      <html>
         <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" href="bootstrap.css" type="text/css">
         </head>
         <style>
            .second{
               background: lightgray;
               margin-top: 10px;
            }
         </style>
         <body>
            <div class="container">
               <h1>Delete a Customer</h1>
               <div class="alert alert-danger">
                  Are you sure to <strong>Delete?</strong>
               </div>
            </div>
            <div class="container second">
               <div class="col-md-4 col-md-offset-3">
                  <form action="" method="post">
                     <input class="btn btn-danger" type="submit" name="yes" value="Yes">
                     <a href="index.php" class="btn btn-default" name="no">No</a>
                  </form>

               </div>
            </div>
            <?php
               if (isset($_POST["yes"])) {
                  $id = $_GET["id"];
                  $sql = "DELETE FROM grid WHERE id=$id";
                  $query = mysqli_query($base,$sql);
                  if ($query) {
                     header("Location:index.php");
                  }
               }
             ?>
         </body>
      </html>
   <?php } else {
      header("Location:index.php");
   }?>
