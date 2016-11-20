<?php
class FormValidator {
  public static function vEmail($rawEmail){
    //Sanitize Email
    $email = filter_var($rawEmail, FILTER_SANITIZE_EMAIL);

    //Validate Email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return "<strong style='color:green'>Valid Email Address</strong>";
    }
    else{
      return "<strong style='color:red'>Invalid Email Address</strong>";
    }
  }
}
 ?>
