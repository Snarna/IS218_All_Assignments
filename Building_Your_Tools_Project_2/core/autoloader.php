<?php
class Autoloader {
  public static function loader($className){
    $class = '../' . $className. '.class.php';
    if(!file_exists($class)){
      return false;
    }
    require $class;
  }
}

spl_autoload_register('Autoloader::loader');

?>
