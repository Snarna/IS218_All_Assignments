<?php
require_once('carInfo.class.php');
require_once('setOwner.class.php');

function reflectTest(){
  $carInfo = new carInfo('ASD123','TOYOTA');
  $setOwner = new setOwner();
  $setOwner->setOwnerName($carInfo);
}

reflectTest();
?>
