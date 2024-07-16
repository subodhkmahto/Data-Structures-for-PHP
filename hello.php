<?php

// The string to search
$str = "The rain in Spain stays mainly in the plain.";

// The pattern to search for (all words starting with 's')
// $pattern = "/\bt\w*/i"; // \b asserts a word boundary, \w* matches zero or more word characters, i for case-insensitive
// Array to hold matches
$matches = [];
$pattern = '/\b\w*[aeiou]\w*\b/i';

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);


$keys_value = ['a', 'b', 'c', 'd', 'f'];

function mapping($n) {
    global $keys_value;
    static $i = 0; // Static variable to keep track of the index
    $key = $keys_value[$i];
    $i++; // Increment the index for the next call
    return [$key => $n * $n];
}

$numbers = [1, 2, 3, 4, 5];

// Use array_map to apply the mapping function to the numbers
$squaredNumbersWithKeys = array_map('mapping', $numbers);

// Flatten the result
$result = [];
foreach ($squaredNumbersWithKeys as $key=> $item) {
    $result[key($item)] = current($item);
    // echo $key;
}

print_r($squaredNumbersWithKeys);
$arr=['a'=>2,'e'=>3,'d'=>3,'e'=>4,'f'=>9];
$arrs=['e'=>4,'f'=>5,'e'=>5,'e'=>6];
print_r(array_intersect_key($arr,$arrs));

?>