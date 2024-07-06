<?php

// Example 1: Splitting a string by whitespace
$str = "Hello world. It's a beautiful day.";
$arr = preg_split("/\s+/", $str); // Splits the string by one or more whitespace characters
print_r($arr); // Output: Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )

// Example 2: Removing non-alphanumeric characters
$str = "Hello! This$ is a test string 123.";
$new_str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str); // Removes all characters that are not letters, digits, or whitespace
echo $new_str; // Output: Hello This is a test string 123

// Example 3: Replacing multiple spaces with a single space
$str = "This     sentence    has   multiple    spaces.";
$new_str = preg_replace('/\s+/', ' ', $str); // Replaces one or more whitespace characters with a single space
echo $new_str; // Output: This sentence has multiple spaces

// Example 4: Replacing consonants with asterisks and storing result
$str = "Hello! This is a test string 123.";
$store = [];
$result = preg_replace('/[^aeouiIAEOU]/', '*', $str); // Replaces all characters that are not vowels with an asterisk
$store[] = $result;
print_r($store); // Output: Array ( [0] => *e**o! *i* i* a *e* *i** *23. )

// Example 5: Removing non-alphanumeric characters again
$new_str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str); // Same as Example 2
echo $new_str; // Output: Hello This is a test string 123

// Example 6: Removing extra whitespace from beginning and end of string
$str = "   Trim this string   ";
$new_str = preg_replace('/^\s+|\s+$/', '', $str); // Removes leading and trailing whitespace
echo $new_str; // Output: Trim this string

// Example 7: Replacing URLs with anchor tags
$str = "Visit our website at https://example.com and learn more.";
$new_str = preg_replace('/\bhttps?:\/\/\S+/', '<a href="$0">$0</a>', $str); // Wraps URLs in anchor tags
echo $new_str; // Output: Visit our website at <a href="https://example.com">https://example.com</a> and learn more.

// Example 8: Masking credit card numbers
$str = "Your credit card number is 1234-5678-9012-3456.";
$new_str = preg_replace('/\b(\d{4}-){3}\d{4}\b/', '****-****-****-****', $str); // Masks credit card numbers
echo $new_str; // Output: Your credit card number is ****-****-****-****.

// Example 9: Extracting numbers from a string
$str = "The price of the product is $99.99.";
preg_match_all('/\d+(\.\d+)?/', $str, $matches); // Matches all numbers (integer and floating-point)
$numbers = implode(', ', $matches[0]);
echo "Numbers found: " . $numbers; // Output: Numbers found: 99.99

// Example 10: Converting Markdown-style links to HTML
$str = "Read [PHP Manual](https://www.php.net/manual/en/) for more information.";
$new_str = preg_replace('/\[([^\]]+)\]\((https?:\/\/[^\)]+)\)/', '<a href="$2">$1</a>', $str); // Converts Markdown links to HTML
echo $new_str; // Output: Read <a href="https://www.php.net/manual/en/">PHP Manual</a> for more information.

// Example 11: Removing leading zeros from IP addresses
$ip = "192.168.001.001";
$new_ip = preg_replace('/(\b\d{1,3})\.0+(\d{1,3}\b)/', '$1.$2', $ip); // Removes leading zeros from IP address octets
echo $new_ip; // Output: 192.168.1.1

// Example 12: Uppercasing the first letters of words
$str = "capitalize each word in this sentence.";
$new_str = preg_replace_callback('/\b\w/', function($match) {
    return strtoupper($match[0]);
}, $str); // Uppercases the first letter of each word
echo $new_str; // Output: Capitalize Each Word In This Sentence.

?>
