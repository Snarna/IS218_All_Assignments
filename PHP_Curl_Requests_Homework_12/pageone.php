<?php
require_once("myCurl.class.php");

//Get Infomation
$name = $_GET["name"];

//Create Curl
$myCurl = new MyCurl();

//Target URL
$targetURL = "http://localhost/PHP_Curl_Requests_Homework_12/pagetwo.php";

//Parameters
$param = array("name" => $name);

//Call Curl
echo $myCurl->httpPost($targetURL, $param);


?>
