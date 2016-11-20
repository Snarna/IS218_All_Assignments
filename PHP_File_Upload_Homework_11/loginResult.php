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
     <?php
     define("DATA_STORE_DIR", __DIR__."/data/");
     require_once("validate.class.php");

     //Check Email
     if(isset($_POST['inputEmail'])){
       $vResult = FormValidator::vEmail($_POST['inputEmail']);
       if($vResult){
         echo "<strong style='color:green'>Valid Email Address</strong><br>";
       }
       else{
         echo "<strong style='color:red'>Invalid Email Address</strong><br>";
       }
     }


     //Upload File
     if(!empty($_FILES["inputImage"])){
       $img = $_FILES["inputImage"];

       if($img["error"] !== UPLOAD_ERR_OK){
         echo "Upload Error!<br>";
         die();
       }

       //Prepare Name
       $name = preg_replace("/[^A-Z0-9._-]/i", "_", $img["name"]);
       $i = 0;
       $parts = pathinfo($name);
       while(file_exists(DATA_STORE_DIR.$name)){
         $i++;
         $name = $parts["filename"] . "_" . $i . "." . $parts["extension"];
       }

       //Store File
       $result = move_uploaded_file($img["tmp_name"], DATA_STORE_DIR . $name);
       if(!$result){
         echo "Unable to save the file!<br>";
         die();
       }

       //Chmod
       chmod(DATA_STORE_DIR . $name , 0644);
       //Display Image
       echo "<img src='./data/" . $name . "' class='img-thumbnail'><br>";
     }
      ?>
   </body>
</html>
