<?php
// Array of numbers
$numbers = [3, 1, 4, 1, 5, 9];

// Custom comparison function
usort($numbers, function ($a, $b) {
    return $a <=> $b; // Ascending order
});

echo "Sorted Numbers (Ascending): ";
print_r($numbers);

// Array of associative arrays
$people = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 22],
    ['name' => 'Doe', 'age' => 28]
];

// Custom comparison function to sort by age
usort($people, function ($a, $b) {
    return $a['age'] <=> $b['age']; // Sort by age in ascending order
});

echo "Sorted People by Age: \n";
print_r($people);
?>

