<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function solve($nums, &$result, &$booleanArray, &$temp) {
        if (count($temp) == count($nums)) {
            $result[] = $temp;
            return;
        }
        for ($i = 0; $i < count($nums); $i++) {
            if (!$booleanArray[$i]) {
                $booleanArray[$i] = true;
                $temp[] = $nums[$i];
                $this->solve($nums, $result, $booleanArray, $temp);
                $booleanArray[$i] = false;
                array_pop($temp);
            }
        }
    }

    function permute($nums) {
        $result = [];
        $booleanArray = array_fill(0, count($nums), false);
        $temp = [];
        $this->solve($nums, $result, $booleanArray, $temp);
        return $result;
    }
}


?>