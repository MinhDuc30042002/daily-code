<?php

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs)
{
    $prefix = $strs[0];
    $strlen = count($strs);

    for ($i = 1; $i < $strlen; $i++) {
        echo $strs[$i];
    }
}

longestCommonPrefix(["flower", "flow", "flight"]);
