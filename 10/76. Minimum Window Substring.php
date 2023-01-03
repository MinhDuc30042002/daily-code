<?php

/**
 * @param String $s
 * @param String $t
 * @return String
 */
function minWindow($s, $t)
{
    $m = strlen($s);
    $n = strlen($t);

    for ($i = 0; $i < $m; $i++) {
        echo $s[$i];
    }
}

minWindow("ADOBECODEBANC", "ABC");
