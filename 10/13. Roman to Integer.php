<?php

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s)
{
    $roman = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $result = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $current = $roman[$s[$i]];
        $prev = $roman[$s[$i - 1]];
        $result += $current;
        
        if ($i > 0 && $current > $prev) {
            $result -= $prev * 2;
        }
    }

    return $result;
}

