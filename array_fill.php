<?php

// array_fill(int $start_index, int $count, mixed $value): array



// Example 1: Simple array filling
$array = array_fill(0, 5, 'PHP');
print_r($array);

/* Output:
Array
(
    [0] => PHP
    [1] => PHP
    [2] => PHP
    [3] => PHP
    [4] => PHP
)
*/

// Example 2: Starting from a different index
$array = array_fill(3, 4, 0);
print_r($array);

/* Output:
Array
(
    [3] => 0
    [4] => 0
    [5] => 0
    [6] => 0
)
*/

// Example 3: Negative start index
$array = array_fill(-2, 3, 'hello');
print_r($array);

/* Output:
Array
(
    [-2] => hello
    [0] => hello
    [1] => hello
)
*/


?>