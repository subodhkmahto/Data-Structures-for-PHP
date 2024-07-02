<?php


$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

// Combining arrays to create an associative array
$c = array_combine($fname, $age);

// Printing the resulting associative array
print_r($c);


// Array
// (
//     [Peter] => 35
//     [Ben] => 37
//     [Joe] => 43
// )


// Certainly! Here are examples and explanations of explode(), implode(), json_encode(), json_decode(), and other commonly used functions in PHP development.

// explode()
// Description: Splits a string by a specified delimiter into an array.

// Syntax: explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array


// Define a string
$string = "apple,banana,cherry";

// Split the string by comma into an array
$array = explode(",", $string);
print_r($array);
// Output: Array ( [0] => apple [1] => banana [2] => cherry )

// implode()
// Description: Joins array elements with a string.

// Syntax: implode(string $separator, array $array): string

// Define an array
$array = ["apple", "banana", "cherry"];

// Join array elements into a string with comma as separator
$string = implode(",", $array);
echo $string;

// Output: apple,banana,cherry



// [
//     'attribute' => 'dependent_id',
//     'format' => 'html',
//     'value' => function ($data) {
//     // Assuming $data->dependent_id contains the IDs in a format like ["69", "70", "71"]
//     $dependentIds = json_decode($data->dependent_id);
//     $results = [];
//     foreach ($dependentIds as $dependentId) {
//     $results[] = EmployeeBill::resolveDependents($dependentId, $data->emp_id);
//     }
//     return implode(', ', $results); // Adjust the separator as needed
//     },
// ]


// json_encode()
// Description: Returns the JSON representation of a value.

// Syntax: json_encode(mixed $value, int $flags = 0, int $depth = 512): string|false 

// Define an associative array
$array = ["name" => "John", "age" => 30, "city" => "New York"];

// Convert the array to JSON format
$json = json_encode($array);
echo $json;
// Output: {"name":"John","age":30,"city":"New York"}

//  json_decode() 
//  Description: Decodes a JSON string. 

// Syntax: json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0): mixed 

// Define a JSON string
$json = '{"name":"John","age":30,"city":"New York"}';

// Decode the JSON string into an associative array
$array = json_decode($json, true);
print_r($array);
// Output: Array ( [name] => John [age] => 30 [city] => New York )

// trim()
// Description: Strips whitespace (or other characters) from the beginning and end of a string.

// Syntax: trim(string $string, string $characters = " \n\r\t\v\x00"): string

// Define a string with whitespace
$string = "  Hello World  ";

// Trim whitespace from the beginning and end of the string
$trimmed = trim($string);
echo $trimmed;
// Output: Hello World

// str_replace()
// Description: Replaces all occurrences of the search string with the replacement string.

// Syntax: str_replace(mixed $search, mixed $replace, mixed $subject, int &$count = null): string|array

// Define a string
$string = "Hello World";

// Replace 'World' with 'PHP'
$newString = str_replace("World", "PHP", $string);
echo $newString;
// Output: Hello PHP

// substr()
// Description: Returns a part of a string.

// Syntax: substr(string $string, int $start, int $length = null): string

// Define a string
$string = "Hello World";

// Extract 'World' from the string
$substring = substr($string, 6);
echo $substring;
// Output: World

// strtotime()
// Description: Parses an English textual datetime description into a Unix timestamp.

// Syntax: strtotime(string $datetime, int $baseTimestamp = null): int|false

// Define a date string
$dateString = "next Monday";

// Convert the date string to a Unix timestamp
$timestamp = strtotime($dateString);
echo date("Y-m-d", $timestamp);
// Output: (next Monday's date in Y-m-d format)

// array_push()
// Description: Pushes one or more elements onto the end of an array.

// Syntax: array_push(array &$array, mixed ...$values): int

// Define an array
$array = ["apple", "banana"];

// Push 'cherry' onto the end of the array
array_push($array, "cherry");
print_r($array);
// Output: Array ( [0] => apple [1] => banana [2] => cherry )

// array_pop()
// Description: Pops the element off the end of the array.

// Syntax: array_pop(array &$array): mixed

// Define an array
$array = ["apple", "banana", "cherry"];

// Pop the last element off the array
$lastElement = array_pop($array);
print_r($array);
// Output: Array ( [0] => apple [1] => banana )

// count()
// Description: Counts all elements in an array or something in an object.

// Syntax: count(mixed $value, int $mode = COUNT_NORMAL): int

// Define an array
$array = ["apple", "banana", "cherry"];

// Count the number of elements in the array
$elementCount = count($array);
echo $elementCount;
// Output: 3

// array_chunk()
// Description: Splits an array into chunks.

// Syntax: array_chunk(array $array, int $size, bool $preserve_keys = false): array

// Define an array
$array = ["a", "b", "c", "d", "e"];

// Split the array into chunks of size 2
$chunks = array_chunk($array, 2);
print_r($chunks);
// Output: Array ( [0] => Array ( [0] => a [1] => b ) [1] => Array ( [0] => c [1] => d ) [2] => Array ( [0] => e ) )

// array_column()
// Description: Returns the values from a single column in the input array.

// Syntax: array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array

// Define a multi-dimensional array
$array = [
    ["id" => 1, "name" => "John"],
    ["id" => 2, "name" => "Jane"],
    ["id" => 3, "name" => "Doe"]
];

// Get all values from the 'name' column
$names = array_column($array, "name");
$id=array_column($array,"id");

print(json_encode($id));

print_r($names);
// Output: Array ( [0] => John [1] => Jane [2] => Doe )

?>