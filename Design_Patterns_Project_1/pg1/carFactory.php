<?php
class Car {
  public $carMake;
  public $carModel;
  public $carTrim;

  public function __construct($make, $model, $trim){
    $this->carMake = $make;
    $this->carModel = $model;
    $this->carTrim = $trim;
  }

  public function getMake(){
    return $this->carMake;
  }

  public function getModel(){
    return $this->carModel;
  }

  public function getTrim(){
    return $this->carTrim;
  }
}

class CarFactory{
  public static function createCar($make, $model, $trim = 'LS'){
    return new Car($make, $model, $trim);
  }
}
?>
