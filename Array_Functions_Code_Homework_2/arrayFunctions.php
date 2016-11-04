<?php
//array_column
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
print_r($records, "first_name");

//array_combine
$arr1 = array('this', 'key', 'good');
$arr2 = array('those', 'val', 'bad');
$newarr = array_combine($arr1, $arr2);
print_r($newarr);

//array_count_values
echo array_count_values($newarr);

//array_diff
print_r(array_diff($arr1, $arr2));

//array_flip
print_r(array_flip($newarr));

//array_keys
print_r(array_keys($newarr));

//array_merge
print_r(array_keys($newarr));

//array_pop
$poparr = array_pop($newarr);
print_r($poparr);

//array_search
$result = array_search("those", $arr2);
echo $result;

//array_push
$arr2[] = 'new item';

//array_sum
$sumArr = array(1,2,3,4,5);
echo array_sum($sumArr);

//asort
print_r(asort($sumArr));

//count
echo count($sumArr);

//array_change_key_case
print_r(array_change_key_case($newarr, CASE_UPPER));
?>
