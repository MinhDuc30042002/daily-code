<?php

/**
 * @param String $str1
 * @param String $str2
 * @return String
 */
function gcdOfStrings($str1, $str2)
{
    if ($str1 . $str2 != $str2 . $str1) return "";

    $gcd = (gcd(strlen($str1), strlen($str2)));
    return substr($str1, 0, $gcd);
}

function gcd($n1, $n2)
{
    while ($n1 != $n2) {
        if ($n1 > $n2) {
            $n1 -= $n2;
        } else {
            $n2 -= $n1;
        }
    }

    return $n1;
}

gcdOfStrings("ABCABC", "ABC");
