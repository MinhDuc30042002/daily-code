<?php

/**
 * @param Integer[] $nums
 * @param Integer $n
 * @return Integer[]
 */
function shuffleArray($nums, $n)
{
    $result = [];

    for ($i = 0; $i < $n; $i++) {
        array_push($result, $nums[$i]);
        array_push($result, $nums[$n + $i]);
    }

    return $result;
}

shuffleArray([1, 2, 3, 4, 4, 3, 2, 1], 4);
