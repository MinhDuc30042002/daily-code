<?php

/**
 * @param String[] $strs
 * @return Integer
 */
function minDeletionSize($strs)
{
    $count = 0;
    $n = count($strs);
    $k = strlen($strs[0]);

    for ($i = 0; $i < $k; $i++) {
        for ($j = 1; $j < $n; $j++) {
            if ($strs[$j][$i] < $strs[$j - 1][$i]) {
                $count++;
                break;
            }
        }
    }
    return $count;
}
