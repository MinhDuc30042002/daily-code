<?php

/**
 * @param String $s
 * @param String $goal
 * @return Boolean
 */
function rotateString($s, $goal)
{
    if($s === $goal) return true;
    
    for ($i = 1; $i < strlen($s); $i++) {
        $string =  substr($s, $i) . substr($s, 0, $i);
        if ($string == $goal) return true;
    }

    return false;
}

