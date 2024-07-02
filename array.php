<?php

$arr = array("a" => 1, "b" => 2, "c" => 3);


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
print_r($result);
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
print_r($numbers);
// Output: Array ( [0] => 1 [1] => 2 [2] => 10 [3] => 11 [4] => 5 )

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

?>