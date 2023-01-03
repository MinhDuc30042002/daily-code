<?php

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Boolean
 */
function containsNearbyDuplicate($nums, $k)
{
    $hashTable = [];

    foreach ($nums as $index => $value) {
        if (isset($hashTable[$value]) && abs($hashTable[$value] - $index) <= $k) {
            return true;
        } else {
            $hashTable[$value] = $index;
        }
    }
    return false;
}
containsNearbyDuplicate([1, 2, 3, 1], 3);
