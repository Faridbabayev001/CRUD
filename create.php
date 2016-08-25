<?php
   include "check.php";
 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" type="text/css">
   </head>
   <style>
      .Second{
         background: lightgray;
      }
      a{
         margin: 20px 0px;
      }
   </style>
   <body>
      <div class="container">
         <h1>Create a Customer</h1>
         <div class="col-md-4 col-md-offset-3">
            <form action="create.php" method="post" id="createform">
               <input type="text" name="name" class="form-control" placeholder="Name"><br>
               <input type="text" name="email" class="form-control" placeholder="Email Address"><br>
               <input type="number" name="mobil" class="form-control" placeholder="Mobile Number"><br>
               <input type="submit" name="create" class="btn btn-success">
            </form>
         </div>
      </div>
      <div class="container Second">
         <div class="col-md-4 col-md-offset-3">
               <a href="index.php" class="btn btn-default">Back</a>

         </div>
      </div>
   </body>
</html>
<?php
$ad = $_POST["name"];
$email = $_POST["email"];
$mobil = $_POST["mobil"];
      if (!empty($ad) && !empty($email) && !empty($mobil)) {
         if (isset($_POST["create"])) {
            $sql = "INSERT INTO grid (name,email,mobil) VALUES ('$ad','$email',$mobil)";
            $query = mysqli_query($base,$sql);
               if ($query) {
                  header("Location:index.php");
               }
         }

      }else {
         # code...
      }


 ?>
