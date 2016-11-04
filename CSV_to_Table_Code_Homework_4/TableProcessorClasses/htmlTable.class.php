<?php
require(__DIR__ . "/rawData.class.php");

class htmlTable extends rawData{
  protected $htmlTable = '';

  //Set Array From External Array
  public function setArray($rawArray){
    $this->rawArray = $rawArray;
  }

  //Set Array From CSV File
  public function setArrayFromCSV($fileName){

    $file = fopen(dirname(__DIR__) . '/Data/' . $fileName, "r") or die(print_r(error_get_last(),true));

    //Get Header
    $headerLine = fgetcsv($file);

    //Process CSV Line by Line
    while(($line = fgetcsv($file)) !== FALSE){
      $line = array_combine($headerLine,$line);
      $this->rawArray[] = $line;
    }
  }

  //Print The Array
  public function getArray(){
    print_r($this->rawArray);
  }

  //Generate HTML Table
  public function genTable(){
    $this->htmlTable .= '<table>';

    //Table Head
    $this->htmlTable .= '<thead>';
    $this->htmlTable .= '<tr>';
      foreach($this->rawArray[0] as $key => $val){
        $this->htmlTable .= '<th>' . $key . '</th>';
      }
    $this->htmlTable .= '</tr>';
    $this->htmlTable .= '</thead>';

    //Table Body
    $this->htmlTable .= '<tbody>';
    //Foreach Row
    foreach($this->rawArray as $row){
      $this->htmlTable .= '<tr>';
      //Foreach Cell
      foreach($row as $key => $val){
        if($key == "URL"){
          $this->htmlTable .= "<td><a href=" . $val . ">" . $val . "</a></td>";
        }
        else{
          $this->htmlTable .= "<td>" . $val . "</td>";
        }
      }
      $this->htmlTable .= '</tr>';
    }
    $this->htmlTable .= '</tbody>';

    //Output Result
    echo $this->htmlTable;
  }
}//Class
?>
