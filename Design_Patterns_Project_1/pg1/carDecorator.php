<?php

//Decorator Class
class CarTrimDecorator {
  public $car;
  public $carTrim;

  public function __construct(Car $car){
    $this->car = $car;
    $this->resetTrim();
  }

  public function resetTrim(){
    $this->carTrim = $this->car->getTrim();
  }
}

class TrimPlus extends CarTrimDecorator{
  private $ctd;

  public function __construct(CarTrimDecorator $ctd){
    $this->ctd = $ctd;
  }

  public function makeTrimPlus(){
    $this->ctd->carTrim = $this->ctd->carTrim . '-PLUS';
  }
}

class TrimUltra extends CarTrimDecorator{
  private $ctd;

  public function __construct(CarTrimDecorator $ctd){
    $this->ctd = $ctd;
  }

  public function makeTrimUltra(){
    $this->ctd->carTrim = $this->ctd->carTrim . '-ULTRA';
  }

}
?>
