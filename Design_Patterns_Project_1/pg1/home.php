<?php
require_once('carBundleStrategy.php');
require_once('carFactory.php');

$myCar = CarFactory::createCar('Honda', 'Accord', 'LX');

$bundleA = new CarBundle('A');
$bundleB = new CarBundle('B');
$bundleC = new CarBundle('C');
$bundleD = new CarBundle('D');

echo '<strong>BundleA:<br></strong>';
echo $bundleA->showCarBundle($myCar);
echo '<br>';

echo '<strong>BundleB:<br></strong>';
echo $bundleB->showCarBundle($myCar);
echo '<br>';

echo '<strong>BundleC:<br></strong>';
echo $bundleC->showCarBundle($myCar);
echo '<br>';

echo '<strong>BundleD:<br></strong>';
echo $bundleD->showCarBundle($myCar);
echo '<br>';
?>
