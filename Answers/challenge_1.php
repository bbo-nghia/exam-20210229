<?php

/**
 * Class Solution
 */
class Solution
{

    /**
     * @param int[] $A
     * @return int[]|mixed
     */
    function sortArrayByParity($A = [3,1,2,4])
    {
        usort($A, function ($a, $b) {
            return ($a & 1) - ($b & 1);
        });
        return $A;
    }
}