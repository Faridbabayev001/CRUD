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
         padding: 10px;
      }
      p{
         color: red;
      }
      .one{
         margin: 4px;
      }
      .two{
         margin: 34px 4px;
      }
      .three{
         margin-left: 5px;
      }
      .inputcolor{
         border: 1px solid red!important;
      }
   </style>
   <body>
      <div class="container">
         <h1>Create a Customer</h1>
         <div class="col-md-3">
            <p class="one text-right hidden">Name</p>
            <p class="two text-right hidden">Email Address</p>
            <p class="three text-right hidden">Mobile Number</p>
         </div>
         <div class="col-md-4">
            <form action="create.php" method="post" id="createform">
               <input type="text" name="name" class="form-control" placeholder="Name"><br>
               <input type="text" name="email" class="form-control" placeholder="Email Address"><br>
               <input type="number" name="mobil" class="form-control" placeholder="Mobile Number"><br>
         </div>
         <div class="col-md-4">
            <p class="one hidden">Please enter Name</p>
            <p class="two hidden">Please Email Address</p>
            <p class="three hidden">Pleaase Mobile Number</p>
         </div>
      </div>
      <div class="container Second">
         <div class="col-md-4 col-md-offset-3">
               <input type="submit" name="create" class="btn btn-success">
               <a href="index.php" class="btn btn-default">Back</a>
         </div>
      </div>
      </form>
   </body>
</html>
<?php
if (isset($_POST["create"])) {
   $ad = $_POST["name"];
   $email = $_POST["email"];
   $mobil = $_POST["mobil"];
      if (!empty($ad) && !empty($email) && !empty($mobil)) {
            $sql = "INSERT INTO grid (name,email,mobil) VALUES ('$ad','$email',$mobil)";
            $query = mysqli_query($base,$sql);
               if ($query) {
                  header("Location:index.php");
               }
      }else {
         # code...
      }
   };
 ?>
