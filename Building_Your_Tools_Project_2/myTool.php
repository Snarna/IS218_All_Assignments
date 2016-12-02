<?php
namespace App\Lib;
$myfile = fopen("filename.txt", "rw") or die("Unable to open the file");
$txt = "This is good";
fwrite($myfile, $txt);

while(!feof($myfile)){
  fgets($myfile);
}


 ?>
