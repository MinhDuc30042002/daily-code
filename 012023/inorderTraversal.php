<?php
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root)
    {
        $stack = [];
        $this->getNode($stack, $root);
        return $stack;
    }

    function getNode(&$list, $node)
    {
        // L - Node - R
        if ($node != null) {
            $this->getNode($list, $node->left);
            array_push($list, $node->val);
            $this->getNode($list, $node->right);
        }
    }
}
