<?php

class MathOperations {
    // Method to add two integers
    public function add1($a, $b) {
        return $a + $b;
    }

    // Overloaded method to add three integers
    public function add($a, $b, $c) {
        return $a + $b + $c;
    }

    // Overloaded method to add two floating-point numbers
    public function add2(float $a, float $b) {
        return $a + $b;
    }
}

$math = new MathOperations();
echo $math->add1(5, 10); // Outputs: 15
echo $math->add(5, 10, 15); // Outputs: 30
echo $math->add2(5.5, 10.5); // Outputs: 16.0

?>