<?php



/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isIsomorphic($s, $t)
{
    $length = strlen($s);
    $hash = [];

    $i = 0;

    while ($i < $length) {
        if (!isset($hash[ord($s[$i]) - 97])) {
            $hash[ord($t[$i]) - 97] = ord($s[$i]) - 97;
        } else {
            return false;
        }
        $i++;
    }

    print_r($hash);
    // return true;
}

isIsomorphic('foo', 'bar');
