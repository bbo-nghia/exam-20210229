<?php

class Solution
{

    /**
     * @param $num
     * @return float|int|mixed
     */
    function addDigits($num)
    {
        return $num == 0 ? $num : $num - (9) * ((int)floor(($num - 1) / 9));
    }
}