<?php

class Solution
{
    /**
     * @param String $char
     * @return String
     */

    function isVowel($char)
    {
        return $char == 'a' || $char == 'A' || $char == 'u' || $char == 'U' || $char == 'e' || $char ==                 'E' || $char == 'o' || $char == 'O' || $char == 'i' || $char == 'I';
    }

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        $length = strlen($s);

        $i = 0;
        $j = $length - 1;

        while ($i < $j) {
            if (!$this->isVowel($s[$i])) {
                $i++;
            } elseif (!$this->isVowel($s[$j])) {
                $j--;
            } else {
                $temp = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $temp;

                $i++;
                $j--;
            }
        }
        return $s;
    }
}


echo reverseVowels("leetcode");
