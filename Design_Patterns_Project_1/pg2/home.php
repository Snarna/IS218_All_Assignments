<?php
require_once('borrowerFactory.php');
require_once('myob.php');
require_once('boringBook.php');
require_once('funBook.php');

//Create Observers
$ob_1 = new MyObserver;

//Create Borrower
$borrower_1 = BorrowerFactory::createBorrower('Benjamin');
$borrower_2 = BorrowerFactory::createBorrower('Ming');

//Attach Observer
$borrower_1->attach($ob_1);
$borrower_2->attach($ob_1);

//Borrow Book
$borrower_1->borrowBook(MyFunBook::borrowBook());
$borrower_2->borrowBook(MyBoringBook::borrowBook());

//Display Book Infomation
$borrower_1->getBookTitle();

//Return Book
$borrower_1->returnBook();
$borrower_2->returnBook();

//Display Book Infomation
$borrower_1->getBookTitle();

//Detach
$borrower_1->detach($ob_1);

//Again
$borrower_1->borrowBook(MyFunBook::borrowBook());


?>
