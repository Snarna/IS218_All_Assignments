<html>
<head>
  <style>
    table {
      border-collapse: collapse;
    }

    table, td, th {
      border: 1px solid #ddd;
    }

    th {
      background-color: #3b8ce2;
      color: white;
    }

    tr:nth-child(even){background-color: #f2f2f2};
  </style>
</head>
<body>
<?php
$inputArr = array();
$inputArr[] = array("Name" => "Google", "URL" => "https://www.google.com/", "Type" => "Search engine" );
$inputArr[] = array("Name" => "Youtube", "URL" => "https://www.youtube.com/", "Type" => "Video sharing");
$inputArr[] = array("Name" => "Facebook", "URL" => "https://www.facebook.com/", "Type" => "Social netork");
$inputArr[] = array("Name" => "Baidu", "URL" => "https://www.baidu.com", "Type" => "Search engine");
$inputArr[] = array("Name" => "Yahoo!", "URL" => "https://www.yahoo.com", "Type" => "	Portal and media");
$inputArr[] = array("Name" => "Amazon", "URL" => "https://www.amazon.com", "Type" => "	E-commerce");

class rawData{
  public $rawArray;
  public function __construct($rawArray = array()){

  }
}

class htmlTable extends rawData{
  protected $htmlTable = '';

  public function setArray($rawArray){
    $this->rawArray = $rawArray;
  }


  public function getArray(){
    print_r($this->rawArray);
  }

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
}

//Main
$pro = new htmlTable;
$pro->setArray($inputArr);
$pro->genTable();

?>
</body>
</html>
