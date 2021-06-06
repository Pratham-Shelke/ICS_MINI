<?php
   require './include/common.php' ;

   session_unset();
   session_destroy();
   session_abort();
   header("location: login.php");
?>