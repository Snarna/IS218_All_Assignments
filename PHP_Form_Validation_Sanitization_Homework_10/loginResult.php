<?php
require_once("validate.class.php");
if(isset($_POST['inputEmail'])){
  $vResult = FormValidator::vEmail($_POST['inputEmail']);
  echo $vResult;
}
 ?>
