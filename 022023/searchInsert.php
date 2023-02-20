<?php


/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target)
{
    $min = 0;
    $length = count($nums);
    if ($target > $nums[$length - 1]) return $length;

    if (in_array($target, $nums)) {
        return (array_search($target, $nums));
    }

    for ($i = 0; $i < $length; $i++) {
        if ($target - $nums[$i] > 0) {
            $min = $i + 1;
        }
    }
    return $min;
}

searchInsert([1, 3, 5, 6], 2);
