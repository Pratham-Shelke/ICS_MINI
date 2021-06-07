<!DOCTYPE html>
<?php
   require "./include/common.php";
   if(!isset($_SESSION['username']))
   {
      header("location: login.php");
   }

   function _e($string)
   {
      echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
   }
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="./css/style.css">
   <title>Home</title>
</head>
<body>

   <div class="container">
      <div class="head">
         <h1 style="text-align:center;">Welcome</h1> 
         
      </div>
      
      <br><br><br>
      
      <div class="row">
         <div class="col-xs-6">
         <b><h1>Loged In as User :<br><br><br><u> <?php echo $_SESSION["username"]; ?></h1></b></u>   
         </div>
         <div class="col-xs-6">
         <a style="display:block;margin:auto;width:30%; margin-top:30px;" class="btn btn-danger" href="./logout.php">Logout</a>
         </div>
      </div>
      
      
      <br><br>

      <form action="safeSearchResult.php" method="POST" style="min-height:0;">
         <div class="form-group">
            <input type="text"  class="form-control" placeholder="Search" name="search">
         </div>
         <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success">
         </div>
         <div class="form-group">
            <?php
               $searchText=$_POST["search"];
               // echo "<h2>You searched : <b>$searchText</b></h2>"
            ?>
            <h2>You searched : <b> <?php _e($searchText); ?> </b></h2>
         </div>
      </form>
      <br><br>
      
   </div>
</body>
</html>