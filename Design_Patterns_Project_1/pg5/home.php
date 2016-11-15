<?php
require_once('gunFactory.php');
require_once('gunDecorator.php');

$gun1 = new GunDeco(GunFactory::makeGun('AWC', 'G2'));
$gun2 = new GunDeco(GunFactory::makeGun('Barrett', 'M98B'));
$mySniperRifle = new SniperRifle($gun2);
$myAssaultRifle = new AssaultRifle($gun1);
$mySniperRifle->showGun();
$myAssaultRifle->showGun();
 ?>
