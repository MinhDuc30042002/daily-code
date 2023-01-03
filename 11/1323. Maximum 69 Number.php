<?php

/**
 * @param Integer $num
 * @return Integer
 */
function maximum69Number($num)
{
    $number = (string) $num;
    $strlen = strlen($number);
    for ($i = 0; $i < $strlen; $i++) {
        if ($number[$i] == '6') {
            $number[$i] = '9';
            break;
        }
    }

    return $number;
}


echo maximum69Number(69);
