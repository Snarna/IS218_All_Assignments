<?php
class Borrower {
  private $name;
  private $book = NULL;
  private $hasBook = FALSE;
  public $obs = array();

  public function __construct($name){
    $this->name = $name;
  }

  public function borrowBook($book){
    if($book != NULL){
      $this->book = $book;
      $this->hasBook = TRUE;
      $this->notify($this->book->getTitle(), 'Borrow');
    }
  }

  public function returnBook(){
    if($this->book != NULL){
      $this->book->returnBook($this->book);
      $this->hasBook = FALSE;
      $this->notify($this->book->getTitle(), 'Return');
    }
  }

  public function attach(MyObserver $ob){
    $this->obs[] = $ob;
  }

  public function detach(MyObserver $ob){
    foreach($this->obs as $okey => $oval){
      if($oval == $ob){
        unset($this->obs[$okey]);
      }
    }
  }

  public function notify($bookTitle, $action){
    foreach($this->obs as $ob){
      $ob->update($bookTitle, $action);
    }
  }

  public function getName(){
    echo $this->name;
  }

  public function getBookTitle(){
    if($this->book != NULL && $this->hasBook == TRUE){
      echo $this->book->getTitle() . '<br>';
    }
    else{
      echo 'I dont have a book.<br>';
    }
  }

  public function getHasBook(){
    echo $this->hasBook;
  }
}

class BorrowerFactory{
  public static function createBorrower($name){
    return new Borrower($name);
  }
}
 ?>
