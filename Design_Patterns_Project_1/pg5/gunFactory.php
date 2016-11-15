<?php
class Gun {
  private $name;
  private $model;

  public function __construct($name, $model){
    $this->name = $name;
    $this->model = $model;
  }

  public function getGunName(){
    return $this->name;
  }

  public function getGunModel(){
    return $this->model;
  }
}

class GunFactory {
  public static function makeGun($name, $model){
    return new Gun($name, $model);
  }
}
 ?>
