<?php

//Global Variable
$fa = "fooooo";
function globalTest(){
  echo "This is global var:" . $GLOBALS['fa'] . "<br>";
}
globalTest();

//_SERVER
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'];

//_GET
//An associative array of variables passed to the current script via the URL parameters.

//_POST
//An associative array of variables passed to the current script via the HTTP POST method.

//_FILES
//An associative array of items uploaded to the current script via the HTTP POST method.

//_COOKIE
//An associative array of variables passed to the current script via HTTP Cookies.

//_SESSION
//An associative array containing session variables available to the current script.

//_REQUEST
//An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.

//_ENV
//An associative array of variables passed to the current script via the environment method.
?>
