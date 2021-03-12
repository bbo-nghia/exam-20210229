<?php

class Solution {

    /**
     * @param int $num
     * @return int
     */
    function addDigits($num) {
        if ($num == 0)
            return 0;

        return ($num % 9 == 0) ? 9 : ($num % 9);
    }
}

$sol = new Solution();
print($sol->addDigits(38));
