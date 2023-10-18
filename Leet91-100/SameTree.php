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
 * Problem NO.100
 *
 * @param TreeNode $p
 * @param TreeNode $q
 * @return boolean
 */

function isSameTree($p, $q)
{
    if ($p == null && $q == null) {
        return true;
    }
    if ($p == null || $q == null) {
        return false;
    }

    if ($p->val !== $q->val) {
        return false;
    }
    return isSameTree($p->left, $q->left) && isSameTree($p->right, $q->right);
}

/**
 * Test Case 1
 */

$p = new TreeNode(1);
$p->left = new TreeNode(2);
$p->right = new TreeNode(3);

$q = new TreeNode(1);
$q->left = new TreeNode(2);
$q->right = new TreeNode(3);

$output = isSameTree($p, $q);

echo "Case 1:\n";
echo "Input: p = \n";
print_r($p);
echo "  q =\n";
print_r($q);
echo "Output: \n";
print_r($output);
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$p = new TreeNode(1);
$p->left = new TreeNode(2);

$q = new TreeNode(1);
$q->right = new TreeNode(2);

$output = isSameTree($p, $q);
echo "Case 2:\n";
echo "Input: p = \n";
print_r($p);
echo " q =\n";
print_r($q);
echo "Output: \n";
print_r($output);
echo "Expected: false\n\n";

/**
 * Test Case 3
 */

$p = new TreeNode(1);
$p->left = new TreeNode(2);
$p->right = new TreeNode(1);

$q = new TreeNode(1);
$q->left = new TreeNode(1);
$q->right = new TreeNode(2);

$output = isSameTree($p, $q);
echo "Case 3:\n";
echo "Input: p = \n";
print_r($p);
echo " q = \n";
print_r($q);
echo "Output: \n";
print_r($output);
echo "Expected: false\n\n";
