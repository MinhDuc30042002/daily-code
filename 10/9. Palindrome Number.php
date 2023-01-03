<?php

function isPalindrome($x)
{
    $remainder = 0;
    $reverse = 0;
    $origin = $x;
    while ($x > 0) {
        $remainder = $x % 10;
        $reverse = $reverse * 10 + $remainder;
        $x = (int)($x / 10);
    }

    return $reverse == $origin;
}

isPalindrome(121);
