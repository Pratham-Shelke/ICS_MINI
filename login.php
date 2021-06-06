<?php
   require './include/common.php';

   $username = $_POST["username"];
   $password = $_POST["password"];

   $select_query = "SELECT * FROM user WHERE username='$username' and password='$password'";
   echo $select_query;
   $select_query_result = mysqli_query($con,$select_query);
   echo mysqli_fetch_array($select_query_result);
   if(mysqli_num_rows($select_query_result) == 0)
   {
      header("location: index.php");
   }
   else
   {
      $_SESSION["username"]=$username;
      header("location: home.php");
   }

?>