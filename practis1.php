<?php


$str='asd$3#%77';

// print_r(str_split($str));


$numbers = [1, 2, 0, 0, 0,4,5,6];
// $djva=array_splice($numbers, 2, 2, [10, 11]);
$vaa=array_slice($numbers,2,3);
print_r($numbers);
print_r($vaa);

$num = 23942;

$array = str_split((string)$num);

// print_r($array);


// echo is_numeric($num);


$arr1=[1,2,3,4];

$array_sum = array_sum($arr1);

// print_r($array_sum);

$sum= array_reduce($arr1,function($carry,$item){
    return $carry+$item;
},0);


$fff = array_reduce(['2', '3', '4'], function ($ax, $dx) {
    return $ax . ", {$dx}";
}, '1');  // Returns '1, 2, 3, 4'

$ggg = array_reduce(['2', '3', '4'], function ($ax, $dx) {
    return $ax + (int)$dx;
}, 1); 

// print_r($sum);



// printf(abs(-10.9));

// print(abs(-10));

// printf(min(3,5,1,2,9));

// printf(max(3,5,1,2,9));


$arr2=[3,4,5,6];

function resolve($arr1, $arr2) {
    $min1 = $arr1[0];
    $max1 = end($arr1); // Corrected to use $arr1
    $min2 = $arr2[0];
    $max2 = end($arr2);
    return max($max1, $max2, $min1, $min2);
}

// print_r(resolve($arr1,$arr2));

$arr=[0,1,2,3,4,5,6,'true',-1,'subodh'];
// print_r(end($arr));


?>