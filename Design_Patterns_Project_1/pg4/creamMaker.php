<?php
class Cream {
    private $flavor;

    public function __construct($flavor){
      $this->flavor = $flavor;
    }

    public function getFlavor(){
      return $this->flavor;
    }
}

class CreamFactory {
  public static function makeCream($flavor){
    return new Cream($flavor);
  }
}
 ?>
