<?php
abstract class botPrototype{
  private $name;
  private $model;
  abstract function __clone();
  abstract function getName();
  abstract function getModel();
}

class IndustrialBot extends botPrototype{
  function __construct(){
    $this->name = 'INBOT';
    $this->model = 'MK-01';
  }

  function __clone(){
  }

  function getName(){
    return $this->name;
  }

  function getModel(){
    return $this->model;
  }
}

class MedicalBot extends botPrototype{
  function __construct(){
    $this->name = 'MEBOT';
    $this->model = 'ME-01';
  }

  function __clone(){
  }

  function getName(){
    return $this->name;
  }

  function getModel(){
    return $this->model;
  }
}

 ?>
