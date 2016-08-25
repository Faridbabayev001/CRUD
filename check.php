<?php

   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "CRUD";

   $base = mysqli_connect($host,$username,$password,$dbname);

   if (!$base) {
      echo "Error!!!";
   }

 ?>
