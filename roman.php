<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum = 0;
        $roman_value = [
            'I' => 1, 'IV' => 4, 'V' => 5, 'IX' => 9, 'X' => 10, 'XL' => 40, 'L' => 50,
            'XC' => 90, 'C' => 100, 'CD' => 400, 'D' => 500, 'CM' => 900, 'M' => 1000
        ];

        $i = 0;
        while ($i < strlen($s)) {
            if ($i + 1 < strlen($s) && isset($roman_value[substr($s, $i, 2)])) {
                $sum += $roman_value[substr($s, $i, 2)];
                $i += 2;
            } else {
                $sum += $roman_value[$s[$i]];
                $i++;
            }
        }

        return $sum;
    }
}



class Solution1 {

/**
 * @param Integer $num
 * @return String
 */
function intToRoman($num1) {
    $roman_value = [
        1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD', 
        100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL', 
        10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
    ];

    $result = '';

    foreach ($roman_value as $value => $symbol) {
        while ($num1 >= $value) {
            $result .= $symbol;
            $num1 -= $value;
        }
    }

    return $result;
}
}


?>