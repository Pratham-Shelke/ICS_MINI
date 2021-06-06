<?php
   require './include/common.php';

   $username = $_POST["username"];
   $password = $_POST["password"];

   $select_query = mysqli_prepare($con,"SELECT * FROM user WHERE username=? and password=?");
   $select_query->bind_param("ss", $username, $password);
   $select_query->execute();
   $select_query->store_result();
   $select_query_result = $select_query->get_result();
    
   echo $select_query->num_rows;
    
   if($select_query->num_rows==0)
   {
      header("location: index.php");
   }
   else
   {
      $_SESSION["username"]=$username;
      header("location: home.php");
   }

   $select_query->close();

?>