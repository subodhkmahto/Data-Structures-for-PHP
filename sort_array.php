<?php

$array = array(3, 2, 5, 1, 4);

// Sort in ascending order
sort($array);

print_r(array_pop($array));

print_r($array);

// Sort in descending order
rsort($array);
print_r($array);


?>
