
<?php

class Solution
{
    public function subSequece($array, $i, $n, $arrayName)
    {
        // Base case: when the index exceeds the array length
        if ($i > $n) {
            // Check if the subsequence is empty and print '{}'
            if (empty($arrayName)) {
                echo '{}';
            } else {
                // Print the current subsequence
                foreach ($arrayName as $value) {
                    echo $value . ' ';
                }
            }
            echo "\n";
            return;
        }

        // Include the current element in the subsequence
        array_push($arrayName, $array[$i]);
        $this->subSequece($array, $i + 1, $n, $arrayName); // Recur with the next index

        // Exclude the current element from the subsequence and recur
        array_pop($arrayName); 
        $this->subSequece($array, $i + 1, $n, $arrayName);
    }
}

$obj = new Solution();
$array = [3, 1, 2];
$i = 0;
$n = count($array) - 1;
$arrayName = array();
$obj->subSequece($array, $i, $n, $arrayName);

?>
