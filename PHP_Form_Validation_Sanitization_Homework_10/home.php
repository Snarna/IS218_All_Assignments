<?php
require_once("validate.class.php");
global $vResult;
if(isset($_POST['inputEmail'])){
  $vResult = FormValidator::vEmail($_POST['inputEmail']);
}
 ?>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>The HTML5 Herald</title>
      <meta name="description" content="The HTML5 Herald">
      <meta name="author" content="SitePoint">
      <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
   <body>
      <div class="row">
         <div class="col-sm-6 offset-sm-6">
            <form method="post" action="loginResult.php">
               <div class="form-group">
                  <label for="inputEmail">Email address</label>
                  <input type="text" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </body>
</html>
