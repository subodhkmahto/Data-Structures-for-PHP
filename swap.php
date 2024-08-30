<?php

class solution{

public function swap(&$a,&$b) {
    $temp=$a;
    $a=$b;
    $b=$temp;
}

}

$obj=new solution();
$a=4;
$b=5;
$obj->swap($a,$b);
echo "a: $a, b: $b"; // Output the swapped values

?>