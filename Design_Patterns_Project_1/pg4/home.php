<?php
require_once("coneMaker.php");
require_once("creamMaker.php");
require_once("iceCream.php");
require_once("iceCreamBuilder.php");
require_once("iceCreamStrategy.php");

$order1 = new IceCreamStrategy('A');
$order1->showIceCream();

$order2 = new IceCreamStrategy('B');
$order2->showIceCream();

 ?>
