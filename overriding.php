<?php
class Animal {
    // Method in the superclass
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    // Overriding the method in the subclass
    public function makeSound() {
        echo "Bark";
    }
}
$animal = new Animal();
$dog = new Dog();

$animal->makeSound(); // Outputs: Some generic animal sound
$dog->makeSound(); // Outputs: Bark


?>