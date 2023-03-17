<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function pivotIndex($nums)
{
    $sum = 0;
    $sumLeft = 0;

    foreach ($nums as $value) {
        $sum += $value;
    }

    foreach ($nums as $key => $value) {
        if ($sumLeft == $sum - $sumLeft - $value) {
            return $key;
        }

        $sumLeft += $value;
    }

    return -1;
}

echo pivotIndex([1, 7, 3, 6, 5, 6]);
