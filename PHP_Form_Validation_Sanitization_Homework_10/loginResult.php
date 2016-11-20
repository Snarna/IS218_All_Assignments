<?php
require_once("validate.class.php");
if(isset($_POST['inputEmail'])){
  $vResult = FormValidator::vEmail($_POST['inputEmail']);
  if($vResult){
    echo "<strong style='color:green'>Valid Email Address</strong>";
  }
  else{
    echo "<strong style='color:red'>Invalid Email Address</strong>";
  }
}
 ?>
