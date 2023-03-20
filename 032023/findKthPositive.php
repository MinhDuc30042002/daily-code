<?php

/**
 * @param Integer[] $arr
 * @param Integer $k
 * @return Integer
 */
function findKthPositive($arr, $k)
{
    $l = 0;
    $r = count($arr) - 1;

    while ($l < $r) {
        $mid = floor(($l + $r) / 2);

        if ($arr[$mid] - ($mid + 1) >= $k) {
            $r = $mid;
        } else {
            $l = $mid + 1;
        }
    }
    echo $l . "-" . $r;
    return $l + $k;
}

echo findKthPositive([2, 3, 4, 7, 11], 5);
