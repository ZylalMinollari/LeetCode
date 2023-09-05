<?php

/**
 * Problem NO.78
 *
 * @param integer[] $nums
 * @return integer[][]
 */

function subsets($nums)
{
    sort($nums);
    $result = [[]];

    foreach ($nums as $n) {
        $newSubset = [];
        foreach ($result as $subset) {
            $newSubset[] = array_merge($subset, [$n]);
        }
        $result = array_merge($result, $newSubset);
    }

    return $result;
}

/**
 * Test Case 1
 */

$nums = [1, 2, 3];
$output = subsets($nums);
echo "Case 1:\n";
echo "Input: nums =\n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[],[1],[2],[1,2],[3],[1,3],[2,3],[1,2,3]]\n\n";

/**
 * Test Case 2
 */

$nums = [0];
$output = subsets($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[],[0]]\n\n";
