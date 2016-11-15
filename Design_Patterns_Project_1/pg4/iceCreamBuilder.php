<?php
abstract class IceCreamBuilder {
  private $iceCream;
  abstract public function createIceCream();
  abstract public function showIceCream();
}

class OneCreamCone extends IceCreamBuilder {
  private $iceCream;

  public function __construct(){
    $this->createIceCream();
  }

  public function createIceCream(){
    $creams = array(CreamFactory::makeCream('Vanilla'));
    $cone = ConeFactory::makeCone('egg');
    $this->iceCream = new IceCream($creams, $cone);
  }

  public function showIceCream(){
    $this->iceCream->showIceCream();
  }
}

class TwoCreamCone extends IceCreamBuilder {
  private $iceCream;

  public function __construct(){
    $this->createIceCream();
  }

  public function createIceCream(){
    $creams = array(CreamFactory::makeCream('Vanilla'), CreamFactory::makeCream('Chocolate'));
    $cone = ConeFactory::makeCone('egg');
    $this->iceCream = new IceCream($creams, $cone);
  }

  public function showIceCream(){
    $this->iceCream->showIceCream();
  }
}
 ?>
