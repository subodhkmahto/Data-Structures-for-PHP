<?php
class MyClass {
    public $property = "Hello, World!";
}

$instance = new MyClass();

if (is_object($instance)) {
    echo "The variable is an object.\n";
    echo "Property value: " . $instance->property;
} else {
    echo "The variable is not an object.";
}

?>
