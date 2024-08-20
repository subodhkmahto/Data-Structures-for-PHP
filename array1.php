<?php
$values = [1.5, 2.5, 3, 4.5, 5];
$total = array_sum($values);

echo "The sum of the values is: " . $total; // Outputs: The sum of the values is: 16.5

echo date("Y-m-d H:i:s");
// Outputs: 2024-08-16 14:00:00 (example)
echo max(1, 5, 9, 3);  // Outputs: 9

$file = fopen("example.txt", "w");
fwrite($file, "Hello, World!");
fclose($file);

$content = file_get_contents("example.txt");


$file = fopen("example.txt", "r");


?>



<!-- array_key_exists()
Description: Checks if a specified key exists in an array.

Syntax: array_key_exists(mixed $key, array $array): bool -->

<?php
// Define an associative array
$arr = array("a" => 1, "b" => 2, "c" => 3);

// Check if the key 'b' exists in the array
if (array_key_exists("b", $arr)) {
    echo "Key exists!";
} else {
    echo "Key does not exist.";
}

?>
<!-- in_array()
Description: Checks if a value exists in an array.

Syntax: in_array(mixed $needle, array $haystack, bool $strict = false): bool -->


<?php
// Define an array of fruits
$arr = array("apple", "banana", "cherry");

// Check if the value 'banana' exists in the array
if (in_array("banana", $arr)) {
    echo "Value exists!";
} else {
    echo "Value does not exist.";
}


?>
<!-- array_search()
Description: Searches the array for a given value and returns the first corresponding key if successful.

Syntax: array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false -->

<?php
// Define an array of fruits
$arr = array("apple", "banana", "cherry");

// Search for the value 'banana' in the array and get its key
$key = array_search("banana", $arr);
if ($key !== false) {
    echo "Value found at key: " . $key;
} else {
    echo "Value not found.";
}


?>
<!-- array_keys()
Description: Returns all the keys or a subset of the keys of an array.

Syntax: array_keys(array $array, mixed $search_value = null, bool $strict = false): array -->

<?php
// Define an associative array
$arr = array("a" => 1, "b" => 2, "c" => 3);

// Get all keys of the array
$keys = array_keys($arr);
print_r($keys);
// Output: Array ( [0] => a [1] => b [2] => c )
?>
<!-- array_values()
Description: Returns all the values of an array.

Syntax: array_values(array $array): array -->


<?php
// Define an associative array
$arr = array("a" => 1, "b" => 2, "c" => 3);

// Get all values of the array
$values = array_values($arr);
print_r($values);
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
?>
<!-- array_merge()
Description: Merges one or more arrays.

Syntax: array_merge(array ...$arrays): array -->

<?php
// Define two arrays
$arr1 = array("a" => 1, "b" => 2);
$arr2 = array("c" => 3, "d" => 4);

// Merge the arrays
$result = array_merge($arr1, $arr2);
print_r($result);
// Output: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 )
?>
<!-- array_diff()
Description: Computes the difference of arrays.

Syntax: array_diff(array $array1, array ...$arrays): array -->


<?php
// Define two arrays
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("b" => 2, "d" => 4);

// Compute the difference of the arrays
$result = array_diff($arr1, $arr2);
print_r($result);
// Output: Array ( [a] => 1 [c] => 3 )
?>
<!-- array_intersect()
Description: Computes the intersection of arrays.

Syntax: array_intersect(array $array1, array ...$arrays): array -->


<?php
// Define two arrays
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("b" => 2, "d" => 4);

// Compute the intersection of the arrays
$result = array_intersect($arr1, $arr2);
print_r($result);
// Output: Array ( [b] => 2 )
?>
<!-- array_map()
Description: Applies a callback function to the elements of the given arrays.

Syntax: array_map(callable $callback, array $array1, array ...$arrays): array -->


<?php
// Define a callback function to square numbers
function square($n) {
    return $n * $n;
}

// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Apply the callback function to each element of the array
$squaredNumbers = array_map("square", $numbers);

array_map('even',$arr);
print_r($squaredNumbers);
// Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
?>
<!-- array_filter()
Description: Filters elements of an array using a callback function.

Syntax: array_filter(array $array, callable|null $callback = null, int $mode = 0): array -->

<?php
// Define a callback function to check if a number is even
function isEven($n) {
    return $n % 2 == 0;
}

// Define an array of numbers
$numbers = [1, 2, 3, 4, 5, 6];

// Filter the array using the callback function
$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);
// Output: Array ( [1] => 2 [3] => 4 [5] => 6 )
?>
<!-- array_reduce()
Description: Iteratively reduces the array to a single value using a callback function.

Syntax: array_reduce(array $array, callable $callback, mixed $initial = null): mixed -->


<?php
// Define a callback function to sum numbers
function sum($carry, $item) {
    return $carry + $item;
}

// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Reduce the array to a single value using the callback function
$total = array_reduce($numbers, "sum", 0);

echo $total;
// Output: 15
?>
<!-- array_slice()
Description: Extracts a slice of the array.

Syntax: array_slice(array $array, int $offset, int|null $length = null, bool $preserve_keys = false): array -->

<?php
// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Extract a slice of the array
$slice = array_slice($numbers, 1, 3);
print_r($slice);
// Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
?>
<!-- array_splice()
Description: Removes a portion of the array and replaces it with something else.

Syntax: array_splice(array &$array, int $offset, int|null $length = null, mixed $replacement = []): array -->


<?php
// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Remove a portion of the array and replace it with new values
array_splice($numbers, 2, 2, [10, 11]);
print_r($numbers);
// Output: Array ( [0] => 1 [1] => 2 [2] => 10 [3] => 11 [4] => 5 )
?>
<!-- array_walk()
Description: Applies a user function to every member of an array.

Syntax: array_walk(array &$array, callable $callback, mixed $userdata = null): bool -->

<?php
// Define a callback function to add a prefix to each item
function addPrefix(&$item, $key, $prefix) {
    $item = "$prefix$item";
}

// Define an array of fruits
$fruits = ["apple", "banana", "cherry"];

// Apply the callback function to each element of the array
array_walk($fruits, "addPrefix", "fruit: ");
print_r($fruits);
// Output: Array ( [0] => fruit: apple [1] => fruit: banana [2] => fruit: cherry )
?>
<!-- array_unique()
Description: Removes duplicate values from an array.

Syntax: array_unique(array $array, int $flags = SORT_STRING): array -->

<?php
// Define an array of numbers with duplicates
$numbers = [1, 2, 2, 3, 4, 4, 5];

// Remove duplicate values from the array
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers);
// Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [6] => 5 )
?>
<!-- array_reverse()
Description: Returns an array with elements in reverse order.

Syntax: array_reverse(array $array, bool $preserve_keys = false): array -->

<?php
// Define an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Reverse the order of elements in the array
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers);
// Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>
<!-- array_combine()
Description: Creates an array by using one array for keys and another for values.

Syntax: array_combine(array $keys, array $values): array -->

<?php
// Define two arrays for keys and values
$keys = ["a", "b", "c"];
$values = [1, 2, 3];

// Combine the arrays into a single associative array
$combined = array_combine($keys, $values);
print_r($combined);
// Output: Array ( [a] => 1 [b] => 2 [c] => 3 )
?>
<!-- array_fill()
Description: Fills an array with values.

Syntax: array_fill(int $start_index, int $count, mixed $value): array -->

<?php
// Fill an array with the value 'apple' starting from index 0 and repeating 5 times
$filledArray = array_fill(0, 5, "apple");
print_r($filledArray);
// Output: Array ( [0] => apple [1] => apple [2] => apple [3] => apple [4] => apple )
?>