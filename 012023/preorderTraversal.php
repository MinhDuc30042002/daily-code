<?php
require_once 'tree/TreeNode.php';

class Solution extends TreeNode
{
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root)
    {
        $list = [];
        $this->getNode($list, $root);
        return $list;
    }

    function getNode(&$list, $node)
    {
        // Node - L - R
        if ($node != null) {
            array_push($list, $node->val);
            $this->getNode($list, $node->left);
            $this->getNode($list, $node->right);
        }
    }
}
