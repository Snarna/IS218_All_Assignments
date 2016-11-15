<?php
class Cone {
  private $flavor;

  public function __construct($flavor){
    $this->flavor = $flavor;
  }

  public function getFlavor(){
    return $this->flavor;
  }
}

class ConeFactory {
  public static function makeCone($flavor){
    return new Cone($flavor);
  }
}
 ?>
