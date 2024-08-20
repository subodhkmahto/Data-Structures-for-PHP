<?php
interface Animal {
    public function makeSound();  // Method without implementation
    public function eat();        // New method added to the interface
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark!\n";
    }

    public function eat() {
        echo "Dog is eating.\n";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow!\n";
    }

    public function eat() {
        echo "Cat is eating.\n";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound();  // Outputs: Bark!
$dog->eat();        // Outputs: Dog is eating.

$cat->makeSound();  // Outputs: Meow!
$cat->eat();        // Outputs: Cat is eating.
?>
