<?php
class MathOperations {
    // Method to add two integers
    public function addIntegers($a, $b) {
        return $a + $b;
    }

    // Method to add three integers
    public function addThreeIntegers($a, $b, $c) {
        return $a + $b + $c;
    }

    // Method to add two floating-point numbers
    public function addFloats(float $a, float $b) {
        return $a + $b;
    }
}

$math = new MathOperations();
echo $math->addIntegers(5, 10); // Outputs: 15
echo $math->addThreeIntegers(5, 10, 15); // Outputs: 30
echo $math->addFloats(5.5, 10.5); // Outputs: 16.0
?>



<?php
class MathOperations1 {
    // Method to add numbers (handling variable arguments)
    public function add(...$numbers) {
        return array_sum($numbers);
    }
}

$math = new MathOperations1();
echo $math->add(5, 10); // Outputs: 15
echo $math->add(5, 10, 15); // Outputs: 30
echo $math->add(5.5, 10.5); // Outputs: 16.0
?>



<?php
class MathOperations2 {
    // Method to add numbers with type checking
    public function add($a, $b = null, $c = null) {
        if (is_null($b) && is_null($c)) {
            // Two arguments
            return $a + $b;
        } elseif (is_null($c)) {
            // Two arguments
            return $a + $b;
        } else {
            // Three arguments
            return $a + $b + $c;
        }
    }
}

$math = new MathOperations2();
echo $math->add(5, 10); // Outputs: 15
echo $math->add(5, 10, 15); // Outputs: 30
echo $math->add(5.5, 10.5); // Outputs: 16.0
?>

