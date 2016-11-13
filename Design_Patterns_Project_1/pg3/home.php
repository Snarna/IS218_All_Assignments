<?php
require_once("prototype.php");
require_once("adapter.php");
require_once("strategy.php");

$strategy = new botStrategy('A');
$strategy->showMission();

echo "<br>";

$strategy = new botStrategy('B');
$strategy->showMission();
 ?>
