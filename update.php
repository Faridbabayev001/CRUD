<?php
   include "check.php";
   $id = $_GET['id'];

$sql="SELECT `name`, `email`, `mobil` FROM `grid` WHERE `id`=$id";
$query= mysqli_query($base,$sql);
if ($query) {
   $row = mysqli_fetch_assoc($query);
}


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
         height: 50px;
         padding: 10px;
      }
   </style>
   <body>
      <div class="container">
         <h1>Update a Customer</h1>
         <div class="col-md-6">
            <form  action="update1.php" method="post">
               <input  type="hidden" name="id" value="<?= $id ?>">
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
                  <input class="form-control" type="text" name="email" value="<?= $row['email'] ?>">
               </div>
               <div class="col-md-6 text-right">
                  <label class="form-control-label">Mobile Number</label>
               </div>
               <div class="col-md-6">
                  <input class="form-control" type="text" name="mobil" value="<?= $row['mobil']?>">
               </div>

         </div>
      </div>
      <div class="container secondDiv">
         <div class="col-md-4 col-md-offset-3">
            <input class="btn btn-success" type="submit" name="update" value="Update">
            <a class="btn btn-default" href="index.php">Back</a>
         </div>
      </div>
      </form>
   </body>
</html>
<?php
   // if (isset($_POST["update"])) {
   //    $ad = $_POST["name"];
   //    $email = $_POST["email"];
   //    $mobil = $_POST["mobil"];
   //    $sql = "UPDATE grid SET name='$ad',email='$email',mobil='$mobil' WHERE id='$id'";
   //    $query = mysqli_query($base,$sql);
   //    if ($query) {
   //       header("Location:index.php");
   //    }
   // }
 ?>
