<?php
class MyObserver {
  public function __construct(){
  }

  public function update($name, $bookTitle, $action) {
    echo "Observer says: Borrower " . $name . " " . $action . " " .$bookTitle . "<br>";
  }

}
 ?>
