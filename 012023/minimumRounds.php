<?php

/**
 * @param Integer[] $tasks
 * @return Integer
 */
function minimumRounds($tasks)
{
    $result = 0;
    $hash = [];

    foreach ($tasks as $task) {
        array_key_exists($task, $hash) ? $hash[$task]++ : $hash[$task] = 1;
    }

    if (in_array(1, $hash)) return -1;

    foreach ($hash as $item) {
        if ($item % 3 == 0) {
            $result += $item / 3;
        } else {
            $result += ceil($item / 3);
        }
    }

    return $result;
}
