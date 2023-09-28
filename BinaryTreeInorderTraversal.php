<?php

class TreeNode
{
    public $val;
    public $left;
    public $right;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

/**
 * Problem NO.94
 *
 * @param TreeNode $root
 * @return integer[]
 */

function inorderTraversal($root)
{
    $inorderTraversal = [];
    inorderTraversalHelper($root, $inorderTraversal);
    return $inorderTraversal;
}

function inorderTraversalHelper($root, &$inorderTraversal)
{
    if (empty($root) || $root == null) {
        return $inorderTraversal;
    }
    if ($root != null) {
        inorderTraversalHelper($root->left, $inorderTraversal);
        $inorderTraversal[] = $root->val;
        inorderTraversalHelper($root->right, $inorderTraversal);
    }

}

/**
 * Test Case 1
 */

$root = new TreeNode(1);
$root->right = new TreeNode(2);
$root->right->left = new TreeNode(3);
$output = inorderTraversal($root);
echo "Case 1:\n";
echo "Input: root = \n";
print_r($root);
echo "Output: \n";
print_r($output);
echo "Expected: [1,3,2]\n\n";

/**
 * Test Case 2
 */

$root = new TreeNode();
$output = inorderTraversal($root);
echo "Case 2:\n";
echo "Input: root = \n";
print_r($root);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */

$root = new TreeNode(1);
$output = inorderTraversal($root);
echo "Case 3:\n";
echo "Input: root = \n";
print_r($root);
echo "Output: \n";
print_r($output);
echo "Expected: [1]\n\n";
