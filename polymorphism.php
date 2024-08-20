<?php

// Base class
class Shape {
    public function area() {
        return 0;
    }
}

// Derived class for Circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Overriding area method for Circle
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Derived class for Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Overriding area method for Rectangle
    public function area() {
        return $this->width * $this->height;
    }
}

// Function to calculate area
function printArea(Shape $shape) {
    echo "The area is: " . $shape->area() . "\n";
}

// Example usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);     // The area is: 78.539816339745
printArea($rectangle);  // The area is: 24
?>
