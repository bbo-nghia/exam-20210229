<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        while(strlen($num) > 1) {
			return array_sum(str_split($num));
		}
    }
}