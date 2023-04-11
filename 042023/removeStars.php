<?php

/**
 * @param String $s
 * @return String
 */
function removeStars($s)
{
    $length = strlen($s);
    $stack = [];

    for ($i = 0; $i < $length; $i++) 
    {
        if ('*' == $s[$i]) 
        {
            array_pop($stack);
            continue;
        }
    
        array_push($stack, $s[$i]);
    }
    
    return implode($stack);
}

removeStars("leet**cod*e");
