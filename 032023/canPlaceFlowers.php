<?php


/**
 * @param Integer[] $flowerbed
 * @param Integer $n
 * @return Boolean
 */
function canPlaceFlowers($flowerbed, $n)
{
    $lengthArr = count($flowerbed);
    if ($n == 0) return true;
    for ($i = 0; $i < $lengthArr; $i++) {
        if ($flowerbed[$i] == 1) {
            continue;
        }

        if ($i > 0 && $flowerbed[$i - 1] == 1) {
            continue;
        }

        if ($i + 1 < $lengthArr && $flowerbed[$i + 1] == 1) {
            continue;
        }

        $flowerbed[$i] = 1;
        $n--;

        if ($n == 0) {
            return true;
        }
    }

    return false;
}

canPlaceFlowers([1, 0, 0, 0, 1], 2);
