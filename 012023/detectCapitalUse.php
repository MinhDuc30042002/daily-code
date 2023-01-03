<?php

/**
 * @param String $word
 * @return Boolean
 */
function detectCapitalUse($word)
{
    $ucFirst = ucfirst(strtolower($word));
    if(ctype_upper($word) || ctype_lower($word) || $word == $ucFirst) return true;
    
    return false; 
}
