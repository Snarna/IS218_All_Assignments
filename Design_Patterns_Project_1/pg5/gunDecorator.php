<?php
class GunDeco {
  protected $gun;
  protected $accessories;

  public function __construct(Gun $gun){
    $this->gun = $gun;
    $accessories = array();
  }

  public function resetGun(){
    $this->accessories = array();
  }
}

class SniperRifle extends GunDeco {
  private $gd;

  public function __construct(GunDeco $gd){
    $this->gd = $gd;
    $this->addSniperAssessories();
  }

  public function addSniperAssessories(){
    $this->gd->accessories[] = 'Drag Mat';
    $this->gd->accessories[] = 'Rangefinder';
    $this->gd->accessories[] = 'Long Range Scope';
  }

  public function showGun(){
    echo "-----Gun-----<br>";
    echo "Name: " . $this->gd->gun->getGunName() . "<br>";
    echo "Model: " . $this->gd->gun->getGunModel() . "<br>";
    echo "Accessories List: <br>";
    foreach($this->gd->accessories as $val){
      echo "+".$val."<br>";
    }
    echo "------------<br>";
  }
}

class AssaultRifle extends GunDeco {
  private $gd;

  public function __construct(GunDeco $gd){
    $this->gd = $gd;
    $this->addAssaultAssessories();
  }

  public function addAssaultAssessories(){
    $this->gd->accessories[] = 'Flash Light';
    $this->gd->accessories[] = 'Aimpoint Mounts';
    $this->gd->accessories[] = 'Muzzle Brake';
  }

  public function showGun(){
    echo "-----Gun-----<br>";
    echo "Name: " . $this->gd->gun->getGunName() . "<br>";
    echo "Model: " . $this->gd->gun->getGunModel() . "<br>";
    echo "Accessories List: <br>";
    foreach($this->gd->accessories as $val){
      echo "+".$val."<br>";
    }
    echo "------------<br>";
  }
}
 ?>
