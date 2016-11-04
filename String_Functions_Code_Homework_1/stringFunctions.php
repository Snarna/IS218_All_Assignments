<?php
//addslashes
$str = "This is ming's function.";
echo addslashes($str);

//chr
echo $str .= chr(48);

//chunk_split
echo chunk_split($str, 4) . "\n";

//count_chars
foreach(count_chars($str, 1) as $i => $val){
  echo  chr($i) . " occurred " . $val . "time(s).";
}

//echo
echo $str . " echo function";

//explode
print_r(explode(" ", $str));

//htmlentities
echo htmlentities($str, ENT_QUOTES);

//htmlspecialchars_decode
$htmlstr = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($htmlstr);

//implode
$myArray = array('my','arr','ay');
echo implode(',' , $myArray);

//md5
echo md5($str);

//rtrim
echo rtrim($str);

//str_getcsv
$csvString = "hello,world,this,dm";
print_r(str_getcsv($csvString));

//strip_tags
$specialStr = "<p>Inside</p>";
echo strip_tags($specialStr);

//strpos
echo strpos($str, 'i');

//strlen
echo strlen($str);

?>
