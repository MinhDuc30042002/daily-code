<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function jump($nums)
{
    $answer = 0;
    $curEnd = 0;
    $curFar = 0;

    $n = count($nums);

    for ($i = 0; $i < $n - 1; $i++) {
        $curFar = max($curFar, $i + (int) $nums[$i]);

        if ($i == $curEnd) {
            $answer++;
            $curEnd = $curFar;
        }
    }

    return $answer;
}

echo jump([2, 3, 1, 1, 4]);
