<?php

class Solution {

    /**
     * @param array $arr
     * @return array
     */
    function sortArrayByParity($arr) {
        $i = 0;
        $j = count($arr) - 1;
        while ($i < $j) {
            while (($i < $j) && ($arr[$i] % 2 == 0)) $i++;
            while (($i < $j) && ($arr[$j] % 2 == 1)) $j--;
            $tmp     = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }

        return $arr;
    }
}

$sol = new Solution();
print_r($sol->sortArrayByParity([3,1,2,4]));
