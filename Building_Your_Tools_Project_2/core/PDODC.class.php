<?php
class PDODC {
  private $servername;
  private $username;
  private $password;
  private $dbname;
  public $con;

  public function __construct(){
    $this->servername = "sql2.njit.edu";
    $this->username = "ml289";
    $this->password = "Gd2PyqnI1";
    $this->$dbname = "ml289";
    $this->connectDB();
  }

  public function connectDB(){
    $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $username, $password);
    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>
