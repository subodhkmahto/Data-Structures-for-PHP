<?php

$numbers = [1, 2, 3, 4, 5];

// Example 1: Squaring each number
$squaredNumbers = array_map(function($n) {
    return $n * $n;
}, $numbers);

print_r($squaredNumbers);



class MathHelper {
    public static function square($n) {
        return $n * $n;
    }
}

$numbers = [1, 2, 3, 4, 5];

// $mathHelper = new MathHelper();
// $numbers = [1, 2, 3, 4, 5];

// // Example 3: Using an object method
// $squaredNumbers = array_map([$mathHelper, 'square'], $numbers);



// Example 2: Using a static method
$squaredNumbers = array_map(['MathHelper', 'square'], $numbers);

print_r($squaredNumbers);


$numbers1 = [1, 2, 3];
$numbers2 = [4, 5, 6];

// Example 4: Using multiple arrays
$sums = array_map(function($a, $b) {
    return $a + $b;
}, $numbers1, $numbers2);

print_r($sums);


$fruits = ['apple', 'banana', 'cherry'];
$prices = ['apple' => 1.5, 'banana' => 0.75, 'cherry' => 2.0];

// Example 5: Using a callback with indexed and associative arrays
$combined = array_map(function($fruit, $price) {
    return "$fruit costs $price dollars";
}, $fruits, $prices);

print_r($combined);


$numbers = [1, 2, 3, 4, 5];

// Example 6: Using multiple callbacks
$squared = array_map(
    fn($n) => $n * $n,
    $numbers
);

print_r($squared);
