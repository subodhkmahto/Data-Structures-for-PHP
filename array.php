<?php

// Define the callback function to check if a number is even
$isEven = function($a, $b, $c) {
    return [
        'array1_is_even' => $a % 2 === 0,
        'array2_is_even' => $b % 2 === 0,
        'array3_is_even' => $c % 2 === 0
    ];
};

// Define three arrays
$array1 = [1, 2, 3, 4];  // First array
$array2 = [10, 15, 20, 25]; // Second array
$array3 = [5, 6, 7, 8];  // Third array

// Use array_map to apply $isEven on corresponding elements of $array1, $array2, and $array3
$result = array_map($isEven, $array1, $array2, $array3);

// Print the result
print_r($result);



// Define the callback function that checks if all elements are even
$isEven = function($a, $b, $c) {
    return [$a % 2 === 0, $b % 2 === 0, $c % 2 === 0];
};

// Define three arrays
$array1 = [1, 2, 3, 4];     // Array 1
$array2 = [10, 15, 20, 25]; // Array 2
$array3 = [5, 6, 7, 8];     // Array 3

// Use array_map to apply $isEven to corresponding elements of $array1, $array2, and $array3
$result = array_map($isEven, $array1, $array2, $array3);

// Print the result
print_r($result);


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

// Find keys in $array1 that are not present in $array2 and $array3
$result = array_diff_key($array1, $array2, $array3);

print_r($result);

$arr = array("a" => 1, "b" => 2, "c" => 3);

$out=[];
foreach ($arr as $key => $data) {
    $out[] = ['id' => $key, 'name' => $data];
}

$arr_=array_key_first($arr);

$arr_=array_key_last($arr);

if (array_key_exists("b", $arr)) {
    echo "Key exists!";
} else {
    echo "Key does not exist.";
}


$arr = array("apple", "banana", "cherry");

if (in_array("banana", $arr)) {
    echo "Value exists!";
} else {
    echo "Value does not exist.";
}

$arr = array("apple", "banana", "cherry"); 

$key = array_search("banana", $arr);

 if ($key !== false) { 
     echo "Value found at key: " . $key; 
} else {
    echo "Value not found.";
}


$arr = array("a" => 1, "b" => 2, "c" => 3);
$keys = array_keys($arr);
print_r($keys);
// Output: Array ( [0] => a [1] => b [2] => c )


$arr = array("a" => 1, "b" => 2, "c" => 3);
$values = array_values($arr);
print_r($values);
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 )


$arr1 = array("a" => 1, "b" => 2);
$arr2 = array("c" => 3, "d" => 4);
$result = array_merge($arr1, $arr2);
print_r($result);
// Output: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 )


$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("b" => 2, "d" => 4);
$result = array_diff($arr1, $arr2);
print_r($result);
// Output: Array ( [a] => 1 [c] => 3 )


$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("b" => 2, "d" => 4);
$result = array_intersect($arr1, $arr2);
$result1 = array_intersect_key($arr1, $arr2);
print_r($result);
print_r($result1);
// Output: Array ( [b] => 2 )


#array_map()
//Description: Applies a callback function to the elements of the given arrays.

#Syntax: array_map(callable $callback, array $array1, array ...$arrays): array 

function square($n) {
    return $n * $n;
}

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map("square", $numbers);
print_r($squaredNumbers);
// Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


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
foreach ($squaredNumbersWithKeys as $item) {
    $result[key($item)] = current($item);
}

print_r($result);



#array_filter()
// Description: Filters elements of an array using a callback function.

// Syntax: array_filter(array $array, callable|null $callback = null, int $mode = 0): array

function isEven($n) {
    return $n % 2 == 0;
}

$numbers = [1, 2, 3, 4, 5, 6];
$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);
// Output: Array ( [1] => 2 [3] => 4 [5] => 6 )

array_filter($numbers,function($value){
    return $value%2==0;
});



#array_reduce()
// Description: Iteratively reduces the array to a single value using a callback function.

// Syntax: array_reduce(array $array, callable $callback, mixed $initial = null): mixed

function sum($carry, $item) {
    return $carry + $item;
}

$numbers = [1, 2, 3, 4, 5];
$total = array_reduce($numbers, "sum", 0);
echo $total;


// Output: 15

#array_slice()
// Description: Extracts a slice of the array.

// Syntax: array_slice(array $array, int $offset, int|null $length = null, bool $preserve_keys = false): array


$numbers = [1, 2, 3, 4, 5];
$slice = array_slice($numbers, 1, 3);
print_r($slice);
// Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
#array_splice()
// Description: Removes a portion of the array and replaces it with something else.

// Syntax: array_splice(array &$array, int $offset, int|null $length = null, mixed $replacement = []): array


$numbers = [1, 2, 3, 4, 5];
array_splice($numbers, 2, 2, [10, 11]);


// $numbers = [1, 2, 3, 4, 5]
// Indexes: [0, 1, 2, 3, 4]
// array_splice($numbers, 2, 2, [10, 11]):

// 2 (Offset): Start at index 2, which is the element 3.
// 2 (Length): Remove 2 elements starting from index 2. This removes 3 and 4.
// [10, 11] (Replacement): Insert 10 and 11 where the removed elements were.
// Modified Array:

// After the operation, the array becomes [1, 2, 10, 11, 5].
// Final Output:
// php
// Copy code
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 10
//     [3] => 11
//     [4] => 5
// )

print_r($numbers);
// Output: Array ( [0] => 1 [1] => 2 [2] => 10 [3] => 11 [4] => 5 )


$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
array_splice($fruits, 1, 2, ["kiwi", "mango"]);

print_r($fruits);
// Array
// (
//     [0] => apple
//     [1] => kiwi
//     [2] => mango
//     [3] => date
//     [4] => elderberry
// )


$fruits = ["apple", "banana", "cherry", "date", "elderberry"];
array_splice($fruits, 2, 0, ["fig", "grape"]);

print_r($fruits);

// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => fig
//     [3] => grape
//     [4] => cherry
//     [5] => date
//     [6] => elderberry
// )

// Additional Useful Array Functions
#array_walk()
// Description: Applies a user function to every member of an array.

// Syntax: array_walk(array &$array, callable $callback, mixed $userdata = null): bool


function addPrefix(&$item, $key, $prefix) {
    $item = "$prefix$item";
}

$fruits = ["apple", "banana", "cherry"];
array_walk($fruits, "addPrefix", "fruit: ");
print_r($fruits);
// Output: Array ( [0] => fruit: apple [1] => fruit: banana [2] => fruit: cherry )
// array_unique()
// Description: Removes duplicate values from an array.

// Syntax: array_unique(array $array, int $flags = SORT_STRING): array


$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers);
// Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [6] => 5 )
// array_reverse()
// Description: Returns an array with elements in reverse order.

// Syntax: array_reverse(array $array, bool $preserve_keys = false): array

$numbers = [1, 2, 3, 4, 5];
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers);
// Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
#array_combine()
// Description: Creates an array by using one array for keys and another for values.

// Syntax: array_combine(array $keys, array $values): array

$keys = ["a", "b", "c"];
$values = [1, 2, 3];
$combined = array_combine($keys, $values);
print_r($combined);
// Output: Array ( [a] => 1 [b] => 2 [c] => 3 )

#array_fill()
// Description: Fills an array with values.

// Syntax: array_fill(int $start_index, int $count, mixed $value): array


$filledArray = array_fill(0, 5, "apple");
print_r($filledArray);
// Output: Array ( [0] => apple [1] => apple [2] => apple [3] => apple [4] => apple )
// These functions, along with the ones you mentioned, provide a comprehensive toolkit for manipulating arrays in PHP, making it easier to handle complex data structures and perform various operations.




// Original array with values
$formate_values = [
    "MDU",
    "SAMARTH",
    "PRG",
    "ID",
    "2023",
    "oucode",
    "000001",
    "MDU"
];

// Values to remove
$values_to_remove = ["SAMARTH", "PRG", "ID"];

// Filter out the values to remove
$filtered_values = array_filter($formate_values, function($value) use ($values_to_remove) {
    return !in_array($value, $values_to_remove);
});

// Reindex the array (optional)
$filtered_values = array_values($filtered_values);

// Display the filtered array
print_r($filtered_values);



// Original array
$array = [
    [ "reset_series_on_every_programme", "1" ],
    [ "year", "FOUR DIGIT YEAR FORMAT (YYYY)" ],
    [ "OuCode", "oucode" ],
    [ "length_of_series", "6" ],
    [ "prefix", "INSTITUTE_CODE_PREFIX" ],
    [ "suffix_custom_code", "" ],
    [ "OuCode", "oucode" ], // Index 6 that we want to remove
    [ "separator", "|" ],
    [ "reset_series_on_every_programme", "1" ],
    [ "isset_programme_specific_codes", "null" ]
];

// Remove the element at index 6
unset($array[6]);

// Reindex the array if needed (optional, but useful if you need sequential indices)
$array = array_values($array);

// Output the modified array
var_dump($array);

var_dump(array_splice($dublicateNumericArray, 6, 1));die();
unset($dublicateNumericArray[6]);

?>