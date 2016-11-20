<?php
class FormValidator {
  public static function vEmail($rawEmail){
    //Sanitize Email
    $email = filter_var($rawEmail, FILTER_SANITIZE_EMAIL);

    //Validate Email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
