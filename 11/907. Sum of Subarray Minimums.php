<?php

/**
 * @param Integer[] $arr
 * @return Integer
 */
function sumSubarrayMins($arr)
{
    $length = count($arr);
    $total = 0;

    for ($i = 0; $i < $length - 1; $i++) {
        if ($arr[$i] < $arr[$i + 1]) {
            $total += $arr[$i];
        } else {
            $total += $arr[$i + 1];
        }
    }
    return $total;
}


echo sumSubarrayMins([3, 1, 2, 4]);
// sumSubarrayMins([3, 1, 2, 4]);
