<?php

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function majorityElement($nums)
{
    $majority = [];
    $repeat = array_count_values($nums);
    $times = count($nums) / 3;
    foreach ($repeat as $key => $value) {
        if ($value > $times)
            array_push($majority, $key);
    }

    return $majority;
}
