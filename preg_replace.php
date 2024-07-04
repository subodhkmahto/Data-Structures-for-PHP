<?php


$str = "Hello world. It's a beautiful day.";
$arr = preg_split("/\s+/", $str);
print_r($arr);


$str = "Hello! This is a test string 123.";

// Remove non-alphanumeric characters
$new_str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str);

echo $new_str; // Output: Hello This is a test string 123

$str = "This     sentence    has   multiple    spaces.";

// Replace multiple spaces with a single space
$new_str = preg_replace('/\s+/', ' ', $str);

echo $new_str; // Output: This sentence has multiple spaces.

?>







<?php

$str = "Hello! This is a test string 123.";

// Remove non-alphanumeric characters
$new_str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str);

echo $new_str; // Output: Hello This is a test string 123

// Example 2: Replacing Multiple Spaces with Single Space


$str = "This     sentence    has   multiple    spaces.";

// Replace multiple spaces with a single space
$new_str = preg_replace('/\s+/', ' ', $str);

echo $new_str; // Output: This sentence has multiple spaces.



$html = "<p>This is <b>bold</b> and <i>italic</i> text.</p>";

// Remove HTML tags
$text_only = preg_replace('/<[^>]*>/', '', $html);

echo $text_only; // Output: This is bold and italic text.


// Example 4: Removing Extra Whitespace from Beginning and End of String


$str = "   Trim this string   ";

// Remove extra whitespace from beginning and end
$new_str = preg_replace('/^\s+|\s+$/', '', $str);

echo $new_str; // Output: Trim this string


// Example 5: Replacing URLs with Anchor Tags


$str = "Visit our website at https://example.com and learn more.";

// Replace URLs with anchor tags
$new_str = preg_replace('/\bhttps?:\/\/\S+/', '<a href="$0">$0</a>', $str);

echo $new_str; // Output: Visit our website at <a href="https://example.com">https://example.com</a> and learn more.


// <!-- Example 6: Masking Credit Card Numbers -->


$str = "Your credit card number is 1234-5678-9012-3456.";

// Mask credit card numbers
$new_str = preg_replace('/\b(\d{4}-){3}\d{4}\b/', '****-****-****-****', $str);

echo $new_str; // Output: Your credit card number is ****-****-****-****.


//Example 7: Extracting Numbers from String


$str = "The price of the product is $99.99.";

// Extract numbers
preg_match_all('/\d+(\.\d+)?/', $str, $matches);
$numbers = implode(', ', $matches[0]);

echo "Numbers found: " . $numbers; // Output: Numbers found: 99.99

//Example 8: Converting Markdown-style Links to HTML

$str = "Read [PHP Manual](https://www.php.net/manual/en/) for more information.";

// Convert Markdown links to HTML
$new_str = preg_replace('/\[([^\]]+)\]\((https?:\/\/[^\)]+)\)/', '<a href="$2">$1</a>', $str);

echo $new_str; // Output: Read <a href="https://www.php.net/manual/en/">PHP Manual</a> for more information.


// Example 9: Removing Leading Zeros from IP Addresses


$ip = "192.168.001.001";

// Remove leading zeros from IP addresses
$new_ip = preg_replace('/(\b\d{1,3})\.0+(\d{1,3}\b)/', '$1.$2', $ip);

echo $new_ip; // Output: 192.168.1.1


//Example 10: Uppercasing First Letters of Words


$str = "capitalize each word in this sentence.";

// Uppercase first letters of words
$new_str = preg_replace_callback('/\b\w/', function($match) {
    return strtoupper($match[0]);
}, $str);

echo $new_str; // Output: Capitalize Each Word In This Sentence.

?>






?>
