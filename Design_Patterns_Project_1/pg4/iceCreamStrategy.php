<?php
class IceCreamStrategy {
  private $strategy;

  public function __construct($orderId){
    switch ($orderId) {
      case 'A':
        $this->strategy = new OneCreamCone();
        break;
      case 'B':
        $this->strategy = new TwoCreamCone();
        break;
    }
  }

  public function showIceCream(){
    $this->strategy->showIceCream();
  }
}
 ?>
