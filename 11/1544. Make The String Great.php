<?php

/**
 * @param String $s
 * @return String
 */
function makeGood($s)
{
    $strlen = strlen($s);
    $result = [];
    $offset = 32;


    for ($i = 0; $i < $strlen; $i++) {
        //abs(ord($s[$i])) = integer
        if (sizeof($result) > 0 && abs(ord($s[$i]) - ord($result[sizeof($result) - 1])) == $offset) {
            array_pop($result);
        } else {
            $result[sizeof($result)] = $s[$i];
        }
    }
    return implode("", $result);
}

makeGood("abBAcC");
