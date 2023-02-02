<?php

class Solution
{
    public array $char_map;
    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order)
    {

        // sorting
        for ($i = 0; $i < strlen($order); $i++) {
            $this->char_map[ord($order[$i]) - ord('a')] = $i;
        }

        for ($j = 1; $j < count($words); $j++) {
            if ($this->compare($words[$j - 1], $words[$j]) > 0) return false;
        }

        return true;
    }


    function compare($word1, $word2)
    {
        $i = 0;
        $j = 0;
        $char_compare_val = 0;

        while ($i < strlen($word1) && $j < strlen($word2) && $char_compare_val == 0) {
            $char_compare_val = $this->char_map[ord($word1[$i]) - ord('a')] - $this->char_map[ord($word2[$j]) - ord('a')];
            $i++;
            $j++;
        }

        if ($char_compare_val == 0) {
            return strlen($word1) - strlen($word2);
        } else {
            return $char_compare_val;
        }
    }
}

$a = new Solution();
echo $a->isAlienSorted(["hello", "leetcode"], "hlabcdefgijkmnopqrstuvwxyz");
