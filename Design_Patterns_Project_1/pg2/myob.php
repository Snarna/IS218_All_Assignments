<?php
class MyObserver {
  public function __construct(){
  }

  public function update($bookTitle, $action) {
    echo "Observer says: I found Book:" . $bookTitle . " Action:" . $action . '<br>';
  }

}
 ?>
