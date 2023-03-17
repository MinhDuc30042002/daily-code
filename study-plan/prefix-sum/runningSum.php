<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum($nums)
{
    for ($i = 1; $i < count($nums); $i++) {
        $nums[$i] = $nums[$i] + $nums[$i - 1];
    }
    return $nums;
}

runningSum([1, 2, 3, 4]);
