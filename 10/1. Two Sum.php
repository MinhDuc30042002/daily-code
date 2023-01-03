<?php

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target)
{
    $hash = array();
    foreach ($nums as $index => $value) {
        if (isset($hash[$target - $value]) && $hash[$target - $value] != $index) {
            return ([$hash[$target - $value], $index]);
        }
        $hash[$value] = $index;
    }
}

twoSum([2, 7, 11, 15], 9);
