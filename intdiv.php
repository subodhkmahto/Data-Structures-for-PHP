<?php

class Solution{

    public function printN($i){
         if($i==0){
            return ;
         }
       
         $this->printN($i-1);
         print($i);
    }
}

$obj=new  Solution();
$obj->printN(5);
// echo $result;
$numerator = 7;
$denominator = 2;

$quotient = intdiv($numerator, $denominator);

echo "The integer quotient of $numerator divided by $denominator is: $quotient";

?>
