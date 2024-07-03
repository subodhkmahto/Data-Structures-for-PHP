<?php
// Example 1: Basic usage of isset()
$var1 = "Hello, World!";
if (isset($var1)) {
    echo "\$var1 is set.";
} else {
    echo "\$var1 is not set.";
}

// Example 2: Checking multiple variables
$var2 = "PHP";
$var3 = null;

if (isset($var2, $var3)) {
    echo "\nBoth \$var2 and \$var3 are set.";
} else {
    echo "\nEither \$var2 or \$var3 is not set.";
} 


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if form was submitted
//     if (isset($_POST['name']) && isset($_POST['email'])) {
//         // Retrieve form data
//         $name = $_POST['name'];
//         $email = $_POST['email'];

//         // Display form data
//         echo "Name: " . htmlspecialchars($name) . "<br>";
//         echo "Email: " . htmlspecialchars($email);
//     } else {
//         echo "Form data is not set.";
//     }
// } else {
//     echo "Invalid request method.";
// }

$charArray = array('a', 'b', 'c');

// Print the elements of the array
foreach ($charArray as $char) {
    echo $char . "\n";
}


?>
