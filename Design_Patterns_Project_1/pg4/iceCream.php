<?php
class IceCream {
  private $creams;
  private $cone;

  public function __construct(Array $creams, Cone $cone){
    $this->creams = $creams;
    $this->cone = $cone;
  }

  public function showIceCream(){
    echo "-----Ice Cream-----<br>";
    foreach($this->creams as $cream){
      echo "Topping: " . $cream->getFlavor() . "<br>";
    }
    echo "Cone: ".$this->cone->getFlavor() . "<br>";
    echo "-----------------------<br>";
  }
}
 ?>
