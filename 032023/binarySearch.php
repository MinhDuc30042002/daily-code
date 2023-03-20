<?php

/**
 * @param Integer[] $arr
 * @param Integer $k
 * @return Integer
 */
function findNumber($arr, $k)
{
    $n = count($arr);
    $l = 0;
    $r = $n - 1;
    $m = ($l + $r) / 2;

    echo $m;
    // for ($i = 0; $i < $n; $i++) {
    //     if ($arr[$i] == $k) {
    //         echo $i;
    //     }
    // }
}

findNumber([1, 2, 3, 4, 5], 2);
