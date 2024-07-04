<?php 

// For input 
// Hello World 
$a = readline('Enter a string: '); 

// For output 
echo $a;	 
?> 


<?php 

// Input section 
// $a = 10 
$a = (int)readline('Enter an integer: '); 

// $b = 9.78 
$b = (float)readline('Enter a floating'
			. ' point number: '); 

// Entered integer is 10 and 
// entered float is 9.78 
echo "Entered integer is " . $a
	. " and entered float is " . $b; 
?> 

<?php 

// Input 1 5 
fscanf(STDIN, "%d %d", $a, $b); 

// Output 
// The sum of 1 and 5 is 6 
echo "The sum of " . $a . " and "
	. $b . " is " . ($a + $b); 
?> 
