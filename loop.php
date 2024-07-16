<?php

for ($i = 0; $i < 5; $i++) {
    echo "The number is: $i <br>";
}

$i = 1;

while ($i <= 5) {
    echo "The number is: $i <br>";
    $i++;
}

$i = 1;
do {
    echo "The number is: $i <br>";
    $i++;
} while ($i <= 5);


$colors = array("Red", "Green", "Blue");

foreach ($colors as $color) {
    echo "$color <br>";
}

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Nested foreach to iterate over rows and columns
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo "$value ";
    }
    echo "<br>";
}


?>
