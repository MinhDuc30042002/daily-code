<?php

class Solution
{

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        if ($p->val === $q->val) {
            return $this->compareNode($p, $q);
        }

        return false;
    }

    function compareNode(&$p, &$q)
    {
        if ($p->left == $q->left && $p->right == $q->right) return true;
    }
}
