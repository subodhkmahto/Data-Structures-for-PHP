<?php
$str = "Hello! This is a test string 123.";
$store = [];
$replacementCount = 0;

// Callback function to count replacements
function replaceAndCount($matches) {
    global $replacementCount;
    $replacementCount++;
    return;
}

// Perform replacement and count
$result = preg_replace_callback('/[^aeouiIAEOU]/', 'replaceAndCount', $str);
$store[] = $result;

// Print the result and the count of replacements
print_r($store);
echo "Number of replacements: " . $replacementCount;
?>
