<?php

$value = [1, 2, 3, 5, 5, 4, 5];
$max = 0;

foreach ($value as $val) {
    if ($max < $val) {
        $max = $val;
    }
}

echo $max;

$store = [];
foreach ($value as $val) {
    array_push($store, $val ^ $max);
}

var_dump($store);

$store1 = [];
foreach ($store as $val) {
    if ($val == 0) {
        continue;
    }
    array_push($store1, $val ^ $max);
}

var_dump($store1);

$max1 = 0;
foreach ($store1 as $val) {
    if ($max1 < $val) {
        $max1 = $val;
    }
}

echo $max1;

?>
