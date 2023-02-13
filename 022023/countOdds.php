<?php


/**
 * @param Integer $low
 * @param Integer $high
 * @return Integer
 */
function countOdds($low, $high)
{
    $range = ($high - $low) / 2;
    $count = 0;

    if ($low % 2 != 0 || $high % 2 != 0) {
        $count = $range + 1;
    }

    return $count;
}

countOdds(3, 7);
