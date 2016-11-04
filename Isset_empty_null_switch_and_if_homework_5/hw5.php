<?php
$nullVar = null;
$emptyVar = '';
$fullVar = 'ha';

if(isset($nullVar)){
  echo "This isset! True<br>";
}else{
  echo "This is not set!<br>";
}

if(is_null($nullVar)){
  echo "This is null!<br>";
}

if(empty($emptyVar)){
  echo "This var is empty<br>";
}

if(!is_null($fullVar) && isset($fullVar)){
  echo "This variable is not null and it's set<br>";
}

switch (isset($nullVar)) {
  case 0:
    echo "Switch: Null Var<br>";
    break;
  case 1:
    echo "Switch: Not Null<br>";
    break;
}

switch (is_null($nullVar)){
  case 0:
    echo "not null!<br>";
    break;
  case 1:
    echo "null<br>";
    break;
}

switch (empty($fullVar)){
  case 0:
    echo "not empty<br>";
    break;
  case 1:
    echo "empty!<br>";
    break;
}
?>
