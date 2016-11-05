<?php
class carInfo{
  public $plateNum;
  public $make;
  private $name;

  function __construct($plateNum, $make){
    $this->plateNum = $plateNum;
    $this->make = $make;
  }

  public function setOwner($name){
    $this->name = $name;
  }

  public function getOwnerName(){
    echo $this->name;
  }

  public function owned(){
    return true;
  }

}
 ?>
