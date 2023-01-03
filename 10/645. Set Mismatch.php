<?php


/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findErrorNums($nums)
{
    $count = count($nums);
    $hash = array();

    $sum = 0;
    $total = ($count * ($count + 1)) / 2;

    for ($i = 0; $i < $count; $i++) {
        if (array_key_exists($nums[$i], $hash)) {
            $duplicate = $nums[$i];
        } else {
            $hash[$nums[$i]] = $nums[$i];
            $sum += $nums[$i];
        }
    }

    return [$duplicate, $total - $sum];
}

