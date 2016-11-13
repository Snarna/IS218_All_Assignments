<?php
class BotInfoReader{
  private $bot;

  function __construct($bot){
    $this->bot = $bot;
  }

  public function getBotInfo(){
    return "Bot Name:" . $this->bot->getName() . " Bot Model:" . $this->bot->getModel() . "<br>";
  }

}
 ?>
