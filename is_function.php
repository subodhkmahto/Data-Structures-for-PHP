<?php

$var1 = 123; // integer
$var2 = '456'; // string
$var3 = 'abc'; // string

var_dump(is_numeric($var1)); // true
var_dump(is_numeric($var2)); // true
var_dump(is_numeric($var3)); // false

$var1 = 123; // integer
$var2 = '456'; // string
$var3 = 789.0; // float

var_dump(is_int($var1)); // true
var_dump(is_int($var2)); // false
var_dump(is_integer($var3)); // false


$var1 = 123.45; // float
$var2 = '456.78'; // string
$var3 = 789; // integer

var_dump(is_float($var1)); // true
var_dump(is_float($var2)); // false
var_dump(is_double($var3)); // false


$var1 = 'hello'; // string
$var2 = 123; // integer

var_dump(is_string($var1)); // true
var_dump(is_string($var2)); // false

$var1 = '123'; // string
$intVar = (int) $var1; // Convert string to integer

var_dump($intVar); // int(123)



$var1 = 123; // integer
$var2 = '456'; // string

var_dump(gettype($var1)); // string(7) "integer"
var_dump(gettype($var2)); // string(6) "string"



$haystack = "Hello, welcome to the world of PHP.";
$needle = "welcome";

$position = strpos($haystack, $needle);
$position=strpos($haystack,'of');
var_dump($position);

// if ($position !== false) {
//     echo "The string '$needle' was found in '$haystack' at position $position.";
// } else {
//     echo "The string '$needle' was not found in '$haystack'.";
// }


// $arr=[
//     1=>'subodh',
//     2=>'kumar',
//     3=>'matho'
//     ];

//     foreach($arr as $key=> $ar){
//         print_r($key).'<br>';
//     }
    

?>