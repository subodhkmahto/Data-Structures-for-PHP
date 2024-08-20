<?php

$data = '[SAMARTH PRG_IDS: 36-1-63-5-10-2-8-6-12-11-3-4-95-57-70-16-75-80-88-49-73-17-59-13-67-81-77-82-15-43-7-69-58-71-37-86-9-52-29-46-51-42-78-65-56-87-20-47-38-83-61-48-54-30-85-18-66-44-62-34-26-96-60-35-24-19-14-74-25-76-94-79-41-39-53-33-64-55-31-32-27-68-45-40-89-28-90-23-21-91-92-22-93-98-99-97-102-104-105-100-103-101-108-112-111-114-115-113-109-116-122-121-110-117-106-107-120-72-50-125-205]';
// $data=' [SAMARTH PRG_IDS: 91-13]';
// $data='306 : B.TECH (CIVIL ENGINEERING)';
// $data=' LIFE SCIENCE GROUP';
// Step 1: Remove unnecessary parts
$string = str_replace(['SAMARTH PRG_IDS:', '[', ']'], '', $data);

var_dump($string);

// Step 2: Split the string into an array of numbers
$numbers = explode('-', $string);

var_dump($numbers);
// Step 3: Convert strings to integers
$all_programme = array_map('intval', $numbers);

  $unique_valuae=array_unique($all_programme);

// Step 4: Print the array in the desired format
print_r($all_programme);
// print_r($unique_valuae);


?>
