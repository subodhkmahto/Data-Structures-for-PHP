<?php


// Basic String Functions
// strlen: Returns the length of a string.


$length = strlen("Hello World");
// strtolower: Converts a string to lowercase.


$lowercase = strtolower("Hello World");
// strtoupper: Converts a string to uppercase.

$uppercase = strtoupper("Hello World");
// ucfirst: Capitalizes the first character of a string.

$capitalized = ucfirst("hello world");
// ucwords: Capitalizes the first character of each word in a string.


$capitalizedWords = ucwords("hello world");
// trim: Removes whitespace from the beginning and end of a string.

$trimmed = trim("  Hello World  ");
// String Manipulation Functions
// substr: Returns a portion of a string.


$substring = substr("Hello World", 0, 5);
// str_replace: Replaces all occurrences of a search string with a replacement string.


$replaced = str_replace("World", "PHP", "Hello World");
// strpos: Finds the position of the first occurrence of a substring in a string.


$position = strpos("Hello World", "World");
// strrpos: Finds the position of the last occurrence of a substring in a string.


$lastPosition = strrpos("Hello World World", "World");
// strstr: Finds the first occurrence of a string.


$found = strstr("Hello World", "World");
// strrev: Reverses a string.


$reversed = strrev("Hello World");
// Regular Expressions
// preg_match: Performs a regular expression match.


if (preg_match("/world/i", "Hello World")) {
    echo "Match found!";
}

// preg_replace: Performs a regular expression search and replace.


$replaced = preg_replace("/world/i", "PHP", "Hello World");
// String Conversion Functions
// explode: Splits a string by a specified string and returns an array.


$array = explode(" ", "Hello World");
// implode: Joins array elements with a string.

$string = implode(" ", ["Hello", "World"]);

// number_format: Formats a number with grouped thousands.


$formatted = number_format(1234567.89);
// sprintf: Returns a formatted string.


$formatted = sprintf("The price is $%.2f", 123.45);

// Here is a simple example demonstrating some of these functions:



$str = " Hello, World! ";
echo "Original String: '$str'\n";

// Trim the string
$trimmed = trim($str);
echo "Trimmed: '$trimmed'\n";

// Convert to uppercase
$uppercase = strtoupper($trimmed);
echo "Uppercase: '$uppercase'\n";

// Replace "WORLD" with "PHP"
$replaced = str_replace("WORLD", "PHP", $uppercase);
echo "Replaced: '$replaced'\n";

// Get the length of the string
$length = strlen($replaced);
echo "Length: $length\n";

// Reverse the string
$reversed = strrev($replaced);
echo "Reversed: '$reversed'\n";

// Find position of "PHP"
$position = strpos($replaced, "PHP");
echo "Position of 'PHP': $position\n";

// Split the string by comma
$array = explode(",", $trimmed);
print_r($array);

// Join the array back to string
$joined = implode(",", $array);
echo "Joined: '$joined'\n";


$str = "subodh";
$ct = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if (!in_array($str[$i], ['a','e','i','o','u'])) {
        $ct++;
    }
}

echo $ct;


// The string to search
$str = "The rain in Spain stays mainly in the plain.";

// The pattern to search for (all words starting with 's')
$pattern = "/\bt\w*/i"; // \b asserts a word boundary, \w* matches zero or more word characters, i for case-insensitive
// Array to hold matches
$matches = [];


// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);


// The string to search
$str = "Contact us at support@example.com, sales@example.org, or admin@website.net for more information.";

// The pattern to search for email addresses
$pattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}\b/i";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);



// The string to search
$str = "Important dates to remember are 15-08-2023, 01-01-2024, and 25-12-2024.";

// The pattern to search for dates in the format dd-mm-yyyy
$pattern = "/\b\d{2}-\d{2}-\d{4}\b/";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);


// The string to search
$str = "Visit our website at https://www.example.com, follow us on https://twitter.com/example, and check our blog at http://blog.example.org for updates.";

// The pattern to search for URLs
$pattern = "/\bhttps?:\/\/[a-z0-9.-]+\.[a-z]{2,6}\/?[a-z0-9._~:\/?#@!$&'()*+,;=%-]*/i";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);

// n this example, the pattern \bhttps?:\/\/[a-z0-9.-]+\.[a-z]{2,6}\/?[a-z0-9._~:\/?#@!$&'()*+,;=%-]* matches URLs. Here's a breakdown of the pattern:

// \b: Asserts a word boundary.
// https?: Matches http or https.
// :\/\/: Matches ://.
// [a-z0-9.-]+: Matches one or more characters that can be lowercase letters, digits, dots, or hyphens.
// \.: Matches a literal dot.
// [a-z]{2,6}: Matches 2 to 6 lowercase letters (the TLD).
// \/?: Matches zero or one forward slash.
// [a-z0-9._~:\/?#@!$&'()*+,;=%-]*: Matches zero or more URL path characters (letters, digits, and special characters).



// The string to search
$str = "Here are some hashtags: #coding, #PHP, #WebDevelopment, and #OpenAI.";

// The pattern to search for hashtags
$pattern = "/#\w+/";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);

// The string to search
$str = "You can reach us at (123) 456-7890, (987) 654-3210, or (555) 123-4567.";

// The pattern to search for phone numbers
$pattern = "/\(\d{3}\) \d{3}-\d{4}/";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);

// The string to search
$str = "Check out @OpenAI, @elonmusk, and @Twitter for the latest updates.";

// The pattern to search for Twitter usernames
$pattern = "/@[\w]+/";

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches);


// The string to search
$str = '<div class="content">
            <p>Hello, <strong>World</strong>!</p>
            <a href="https://example.com">Visit Example</a>
        </div>';

// The pattern to search for HTML tags
$pattern = '/<[^>]+>/';

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches[0]);

// The string to search
$str = "Hello World! This is an example string for demonstrating regex.";

// The pattern to search for words containing 'a', 'e', 'i', 'o', 'u'
$pattern = '/\b\w*[aeiou]\w*\b/i';

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches[0]);



// The string to search
$str = "Presenting preferences preface, prelude, and preview for preprocessing.";

// The pattern to search for words starting with 'pre'
$pattern = '/\bpre\w*\b/i';

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches[0]);

// The string to search
$str = "The colors #ff0000 (red), #00ff00 (green), and #0000ff (blue) are primary colors.";

// The pattern to search for hexadecimal color codes
$pattern = '/#[a-fA-F0-9]{6}\b/';

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches[0]);

// The string to search
$str = "The price of the product is $99.99 and the quantity is 10.";

// The pattern to search for numeric values
$pattern = '/\b\d+(\.\d+)?\b/';

// Array to hold matches
$matches = [];

// Perform the regular expression match
preg_match_all($pattern, $str, $matches);

// Print the results
print_r($matches[0]);



/*

Basic Syntax of Regular Expressions in PHP
In PHP, regular expressions are typically
 used with functions like 
 preg_match, preg_match_all, preg_replace,
  and others from the preg family. 
  Here's a basic breakdown of how to write and use
   a regular expression in PHP:
*/

// The string to search
$str = "hello123 world";

// The pattern to search for
$pattern = '/hello\d+/';
'/hello\d+';
'/hello\d+';

// Perform the regular expression match
if (preg_match($pattern, $str, $matches)) {
    echo "Pattern matched successfully!\n";
    print_r($matches);
} else {
    echo "Pattern not found.\n";
}


?>
