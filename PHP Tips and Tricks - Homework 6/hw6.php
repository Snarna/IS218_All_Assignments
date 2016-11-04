<?php
//Optional Arguments
function optionalArguments($a1 = 'default1', $a2 = 'default2'){
  echo "a1: $a1<br>";
  echo "a2: $a2<br>";
}
optionalArguments("Arg1In<br>", "Arg2In<br>");
optionalArguments();

function optionalArgumentsTwo(){
  $args = func_get_args();
  foreach($args as $key => $val){
    echo "arg $key : $val <br>";
  }
}
optionalArgumentsTwo("One","Two","Three");

//Glob
$localFiles = glob('*.php');
print_r($localFiles);

//Memory Usage
echo "Memory Usage: ".memory_get_usage()." bytes <br>";

//CPU Usage
//print_r(getrusage());

//Magic Constants
echo "Bugs Line:".__LINE__."<br>";
echo "Current File:".__FILE__."<br>";
echo "Current Dir:".__DIR__."<br>";

//Unique IDs
echo md5(time() . mt_rand(1,1000000))."<br>";
echo uniqid("MOX_")."<br>";

//Serialization
$myObj = array(
  'hi',
  4,
  array("Hard core"),
  'pear'
);

$s = serialize($myObj);
echo $s . "<br>";
print_r(unserialize($s));


//Compress String
$string =
"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";

$compressed = gzcompress($string);
$ori = gzuncompress($compressed);



//Register Shutdown Function
$start_time = microtime(true);
register_shutdown_function('my_finish');

function my_finish(){
  global $start_time;
  echo "Program took" . (microtime(true) - $start_time). " Seconds<br>";
}

?>
