<?php

/**
 * Problem NO.46
 *
 * @param integer[] $nums
 * @return integer[][]
 */
function permute($nums)
{
    $result = [];
    permuteHelper([], $nums, $result);
    return $result;
}

function permuteHelper($currentPermutation, $remaining, &$result)
{
    if (empty($remaining)) {
        $result[] = $currentPermutation;
        return;
    }

    foreach ($remaining as $element) {
        $currentPermutation[] = $element;
        $newRemaining = array_diff($remaining, [$element]);

        permuteHelper($currentPermutation, $newRemaining, $result);
        array_pop($currentPermutation);
    }
}

/**
 * Test Case 1
 */

$nums = [1, 2, 3];
$output = permute($nums);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,2,3],[1,3,2],[2,1,3],[2,3,1],[3,1,2],[3,2,1]]\n\n";

/**
 * Test Case 2
 */

$nums = [0, 1];
$output = permute($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[0,1],[1,0]]\n\n";

/**
 * Test Case 3
 */

$nums = [1];
$output = permute($nums);
echo "Case 3:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[1]\n\n";
