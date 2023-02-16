<?php

function maxDepth($root)
{
    // root == null => return 0

    if ($root == null) return 0;

    // Calculate max depth left
    $maxDepthLeft = maxDepth($root->left);

    // Calculate max depth right
    $maxDepthRight = maxDepth($root->right);

    $maxDepthMaximum = max($maxDepthLeft, $maxDepthRight) + 1;

    return $maxDepthMaximum;
}
