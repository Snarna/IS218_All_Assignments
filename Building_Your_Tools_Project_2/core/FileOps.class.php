<?php
class FileOps {
  private $fp;
  private $fn;
  private $myFile;

  public function __construct($filePath, $fileName){
    $this->fp = $filePath;
    $this->fn = $fileName;
    $this->myFile = fopen($filePath.$fileName, "r+") or die("Unable to open file:$fileName");
  }

  public function readEntire(){
    //Reset File Pointer
    rewind($this->myFile);
    return fread($this->myFile, filesize($this->fp.$this->fn));
  }

  public function readByLine(){
    //Reset File Pointer
    rewind($this->myFile);

    $arr = array();
    while(!feof($this->myFile)){
      $arr[] = fgets($this->myFile);
    }
    return $arr;
  }

  public function writeToFile($line){
    fwrite($this->myFile, $line);
  }

  public function closeFile(){
    fclose($this->myFile);
  }
}
 ?>
