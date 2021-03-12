<?php

class Solution {
    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($arr) {
        $i=0;
        $x=count($arr)-1;
        while($i < $x) {
            if( $arr[$i]%2 === 1 && $arr[$x]%2 === 0 ) {
                [$arr[$x], $arr[$i]] = [$arr[$i], $arr[$x]];
                $i++;
                $x--;
            }
            if( $arr[$i] % 2 === 0 ){
                $i++;
            }
            if( $arr[$x] % 2 === 1 ){
                $x--;
            }
        }

        return $arr;
    }
}

$res = Solution::sortArrayByParity([3,1,2,4]);

print_r($res);

