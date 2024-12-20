<?php


$haystack = "Hello, welcome to the world of PHP!";
$needle = "PHP"; 
if (str_contains($haystack, $needle)) {
    echo "The string contains '$needle'.";
} else {
    echo "The string does not contain '$needle'.";
}
?>

<!-- The stristr() function in PHP is used to find the first occurrence of a substring in a string (case-insensitive)
. It returns the portion of the string starting from the first occurrence of the specified substring, or false
 if the substring is not found. -->

<?php
$haystack = "Hello, welcome to the world of PHP!";
$needle = "PHP";
  
$result = stristr($haystack, $needle);

if ($result) {
    echo "Found: " . $result;
} else {
    echo "Substring not found.";
}
?>