<?php
require_once('carDecorator.php');

class CarBundle {

  private $bundle = NULL;

  public function __construct($bundleId){
    switch ($bundleId) {
      case 'A':
        $this->bundle = new CarWithNoTrimBundle();
        break;
      case 'B':
        $this->bundle = new CarWithPlusTrimBundle();
        break;
      case 'C':
        $this->bundle = new CarWithUltraTrimBundle();
    }
  }

  public function showCarBundle(Car $car) {
    $this->bundle->showBundle($car);
  }

}

interface BundleInterface {
  public function showBundle(Car $car);
}

class CarWithNoTrimBundle implements BundleInterface{
  public function showBundle(Car $car) {
    echo $car->carMake . '<br>';
    echo $car->carModel . '<br>';
    echo $car->carTrim . '<br>';
  }
}

class CarWithPlusTrimBundle implements BundleInterface{
  public function showBundle(Car $car){
    $deco = new CarTrimDecorator($car);
    $decoPlus = new TrimPlus($deco);
    $decoPlus->makeTrimPlus();
    echo $deco->car->carMake . '<br>';
    echo $deco->car->carModel . '<br>';
    echo $deco->carTrim . '<br>';
  }
}

class CarWithUltraTrimBundle implements BundleInterface{
  public function showBundle(Car $car){
    $deco = new CarTrimDecorator($car);
    $decoPlus = new TrimUltra($deco);
    $decoPlus->makeTrimUltra();
    echo $deco->car->carMake . '<br>';
    echo $deco->car->carModel . '<br>';
    echo $deco->carTrim . '<br>';
  }
}

?>
