<?php
$fileName = "mycsv.csv";
try {
  //File Not Found Error
  if(!file_exists($fileName)){
    throw new Exception("Target File Not Found!");
  }

  //Open File
  $file = fopen($fileName, 'r');
  if(!$file){
    throw new Exception("Cannot Open This File! :" . $fileName);
  }

  //Write To File
  $data = "ha,he,hei,hu,hi";
  if(fwrite($file, $data) == false){
    throw new Exception("Cannot Write To File! :" . $fileName);
  }
  echo "Success!";

}
catch (Exception $e) {
  echo "Message:" . $e->getMessage();
}

?>
