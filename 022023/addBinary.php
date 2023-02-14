<?php


/**
 * @param String $a
 * @param String $b
 * @return String
 */
function addBinary($a, $b)
{
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;

    $result = "";
    $carry = 0;

    while ($i >= 0 || $j >= 0 || $carry == 1) {
        if ($i >= 0) {
            $carry += $a[$i] - '0';
        }

        if ($j >= 0) {
            $carry += $b[$j] - '0';
        }

        $result = (($carry % 2 + '0')) . $result;
        $carry = floor($carry / 2);
        $i--;
        $j--;
    }

    return $result;
}

echo addBinary("1010", "1011");
