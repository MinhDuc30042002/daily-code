<?php

/**
 * @param Integer[] $costs
 * @param Integer $coins
 * @return Integer
 */
function maxIceCream($costs, $coins)
{
    $count = 0;
    $temp_coins = $coins;
    sort($costs);

    for ($i = 0; $i < count($costs); $i++) {
        $temp_coins = $temp_coins - $costs[$i];
        if ($temp_coins >= 0) $count++;
    }
    return $count;
}

echo maxIceCream([1, 3, 2, 4, 1], 7);
