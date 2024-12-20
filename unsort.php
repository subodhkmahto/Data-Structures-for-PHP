<?php
// Array of numbers
$numbers = [3, 1, 4, 1, 5, 9];

// Custom comparison function
usort($numbers, function ($a, $b) {
    return $a <=> $b; // Ascending order
});

echo "Sorted Numbers (Ascending): ";
print_r($numbers);
?>
