<?php


$arr1 = array("a" => 1, "b" => 2,"a" => 3);
$arr2 = array("c" => 3, "d" => 4,"a" => 1,"d" => 1);

$result = array_diff($arr2, $arr1);
print_r($result);



?>
