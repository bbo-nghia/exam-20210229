<?php
/**
 * @param $s
 * @return array
 */
function labelsOfPartitions($s = "ababcbacadefegdehijhklij")
{
    $result = [];
    $chars = [];
    $len = strLen($s);
    for ($i = 0; $i < $len; $i++) {
        if (array_key_exists($s[$i], $chars)) {
            $chars[$s[$i]][1] = $i;
        } else {
            $chars[$s[$i]] = [$i, $i];
        }
    }

    $chars = array_values($chars);

    $start = $chars[0][0];
    $max = $chars[0][1];
    $len = count($chars);

    for ($i = 1; $i < $len; $i++) {
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