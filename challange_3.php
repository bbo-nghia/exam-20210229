<?php

class Solution
{

    /**
     * @param string $str
     * @return array
     */
    function partitionLabels($str)
    {
        $count       = strlen($str);
        $partitions  = [];
        $lastIndexes = [];
        for ($i = 0; $i < $count; $i++) {
            $lastIndexes[$str[$i]] = $i;
        }
        $l = 0;
        $r = 0;
        for ($i = 0; $i < $count; $i++) {
            $r = max($r, $lastIndexes[$str[$i]]);
            if ($r == $i) {
                $partitions[] = $r - $l + 1;
                $l            = $i + 1;
            }
        }

        return $partitions;
    }
}

$sol = new Solution();
print_r($sol->partitionLabels('ababcbacadefegdehijhklij'));
