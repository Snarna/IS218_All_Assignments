<?php
class botStrategy{
  private $mission;

  function __construct($id){
    switch ($id) {
      case 'A':
        $this->mission = new MissionA();
        break;
      case 'B':
        $this->mission = new MissionB();
        break;
      default:
        echo "Cannot identify mission code.";
        break;
    }
  }

  function showMission(){
    $this->mission->showMission();
  }
}

interface MissionInterface{
  public function showMission();
}

class MissionA{
  private $inbot;
  private $bots;

  function __construct(){
    $this->inBot = new IndustrialBot;
    for($i = 0; $i < 3; $i++){
      $this->bots[$i] = clone $this->inBot;
    }
  }

  public function showMission(){
    echo "Mission A: <br>";
    foreach($this->bots as $bkey => $bval){
      $botInfo = new BotInfoReader($bval);
      echo "Bot Number " . $bkey . " --- " . $botInfo->getBotInfo();
    }
  }
}

class MissionB{
  private $inbot;
  private $bots;

  function __construct(){
    $this->inBot = new MedicalBot;
    for($i = 0; $i < 3; $i++){
      $this->bots[$i] = clone $this->inBot;
    }
  }

  public function showMission(){
    echo "Mission B: <br>";
    foreach($this->bots as $bkey => $bval){
      $botInfo = new BotInfoReader($bval);
      echo "Bot Number " . $bkey . " --- " . $botInfo->getBotInfo();
    }
  }
}
 ?>
