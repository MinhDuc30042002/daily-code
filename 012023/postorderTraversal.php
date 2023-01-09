<?php

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root)
    {
        $stack = [];
        $this->getNode($stack, $root);
        return $stack;
    }

    function getNode(&$list, $node)
    {
        // L - R - Node
        if ($node != null) {
            $this->getNode($list, $node->left);
            $this->getNode($list, $node->right);
            array_push($list, $node->val);
        }
    }
}
