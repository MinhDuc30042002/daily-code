<?php

/**
 * @param Integer[][] $matrix
 * @return Boolean
 */
function isToeplitzMatrix($matrix)
{
    $lengthMatrix = count($matrix);

    for ($i = 1; $i < $lengthMatrix; $i++) {
        for ($j = 1; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] != $matrix[$i - 1][$j - 1]) {
                return false;
            }
        }
    }

    return true;
}


echo isToeplitzMatrix([[1, 2], [2, 2]]);
