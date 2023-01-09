<?php

/**
 * @param Integer[] $gas
 * @param Integer[] $cost
 * @return Integer
 */
function canCompleteCircuit($gas, $cost)
{
    if (array_sum($gas) < array_sum($cost)) return -1;

    $total = 0;
    $result = 0;

    for ($i = 0; $i < count($cost); $i++) {
        $total = $total + $gas[$i] - $cost[$i];
        if ($total < 0) {
            $total = 0;
            $result = $i + 1;
        }
    }

    return $result;
}
echo canCompleteCircuit([1, 2, 3, 4, 5, 5, 70], [2, 3, 4, 3, 9, 6, 2]);
