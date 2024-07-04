<?php

$array1 = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry',
    'd' => 'date'
];

$array2 = [
    'a' => 'apricot',
    'b' => 'blueberry',
    'e' => 'elderberry'
];

$array3 = [
    'a' => 'avocado',
    'd' => 'dragonfruit'
];

//first array me esi key jo ,arry2,and arry3 me nhi hona h key jo array1 me h
// Find keys in $array1 that are not present in $array2 and $array3
$result = array_diff_key($array1, $array2, $array3);

print_r($result);


// Array
// (
//     [c] => cherry
// )





array("a" => 1, "b" => 2, "a" => 3);
// Since there are duplicate keys in this array ("a" appears twice), PHP will use the last value for the key "a". So effectively, $arr1 will be:


array("a" => 3, "b" => 2);



array("c" => 3, "d" => 4, "a" => 1, "d" => 1);
// Similarly, since "d" appears twice, PHP will use the last value for the key "d". So effectively, $arr2 will be:


array("c" => 3, "d" => 1, "a" => 1);


/*

array_diff Function
array_diff($arr2, $arr1) compares the values of $arr2 against $arr1 and returns an array containing all the values from $arr2 that are not present in $arr1.

$arr2 values: 3, 1, 1
$arr1 values: 3, 2
Here's how the comparison works:

Value 3 in $arr2 is also present in $arr1, so it is excluded.
Value 1 in $arr2 is not present in $arr1, so it is included.
Another value 1 in $arr2 is again not present in $arr1, so it is included.

*/

$arr1 = array("a" => 1, "b" => 2,"a" => 3);
$arr2 = array("c" => 3, "d" => 4,"a" => 1,"d" => 1);

$result = array_diff($arr2, $arr1);
print_r($result);

/*
Array
(
    [d] => 1
    [a] => 1
)
*/


$array1 = ["apple", "banana", "cherry", "date"];
$array2 = ["banana", "date", "elderberry"];
$array3 = ["fig", "grape", "cherry"];

// Find values in $array1 that are not present in $array2 and $array3
$result = array_diff($array1, $array2, $array3);

print_r($result);


// Array
// (
//     [0] => apple
// )

?>
