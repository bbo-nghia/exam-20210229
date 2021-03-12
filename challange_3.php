<?php

class Solution {

    /**
     * @param string $str
     * @return array
     */
    function partitionStr($str) {
        $result = [];
		$chars = [];
		$length = strlen($str);

		for ($i=0; $i<$length; $i++) {
		    if (array_key_exists($str[$i],$chars)) {
		        $chars[$str[$i]][1] = $i;
		    } else {
		        $chars[$str[$i]] = [$i, $i];
		    }
		}

		$chars = array_values($chars);
		$start = $chars[0][0];
		$max = $chars[0][1];
		$length = count($chars);
		
		for ($i=1; $i<$length; $i++) {
		    if ($chars[$i][1] < $max) {
		        continue;
		    } elseif ($chars[$i][0] < $max) {
		        $max = $chars[$i][1];
		        continue;
		    } else {
		        $result[] = $max - $start + 1;
		        $start = $chars[$i][0];
		        $max = $chars[$i][1];
		    }
		}
		
		$result[] = $max - $start + 1;

		return $result;
    }
}
