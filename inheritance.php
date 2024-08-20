<?php
trait Flyable {  //interface
    public function fly() {
        echo "Flying\n";
    }
}

trait Swimmable {
    public function swim() {
        echo "Swimming\n";
    }
}

class Duck {
    use Flyable, Swimmable;
}

// Create an instance of Duck
$duck = new Duck();
$duck->fly();
$duck->swim();
?>

<?php
// Parent class
class Shape {
    public function draw() {
        echo "Drawing a shape\n";
    }
}

// Child class 1
class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle\n";
    }
}

// Child class 2
class Square extends Shape {
    public function draw() {
        echo "Drawing a square\n";
    }
}

// Create instances
$circle = new Circle();
$square = new Square();

$circle->draw();  // Child class method
$square->draw();  // Child class method
?>
<?php
// Grandparent class
class Animal {
    public function eat() {
        echo "Animal is eating\n";
    }
}

// Parent class
class Mammal extends Animal {
    public function walk() {
        echo "Mammal is walking\n";
    }
}

// Child class
class Dog extends Mammal {
    public function bark() {
        echo "Dog is barking\n";
    }
}

// Create an instance of Dog
$dog = new Dog();
$dog->eat();   // Inherited from Animal
$dog->walk();  // Inherited from Mammal
$dog->bark();  // Child's own method
?>
<?php
// Parent class
class Vehicle {
    public function start() {
        echo "Vehicle started\n";
    }
}

// Child class
class Car extends Vehicle {
    public function honk() {
        echo "Car horn honked\n";
    }
}

// Create an instance of Car
$car = new Car();
$car->start();  // Inherited method
$car->honk();   // Child's own method
?>

