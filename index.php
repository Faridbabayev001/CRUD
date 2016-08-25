<?php
   include "check.php";

   $sql = "SELECT * FROM grid";
   $query = mysqli_query($base,$sql);
 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" type="text/css">
   </head>
   <style>
      table{
         margin-top: 20px;
      }
   </style>
   <body>
      <div class="container">
         <h1>PHP CRUD  Grid</h1>
         <a href="create.php" class="btn btn-success">Create</a>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email Address</th>
                     <th>Mobile Number</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php while ($data = mysqli_fetch_assoc($query)) {?>
                     <tr>
                        <?php foreach ($data as $key => $value) {?>
                           <td><?php echo $value ?></td>
                        <?php } ?>
                        <td>
                           <a href="#" class="btn btn-default">Read</a>
                           <a href="update.php?id=<?php echo $data["id"]?>" class="btn btn-primary">Update</a>
                           <a href="delete.php?id=<?php echo $data["id"]?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                     <?php } ?>
               </tbody>
            </table>
      </div>

   </body>
</html>
