<?php

/**
 * Problem NO.53
 *
 * @param integer[] $nums
 * @return integer
 */

function maxSubArray($nums)
{
    $max_sum = $current_sum = $nums[0];

    for ($i = 1; $i < sizeof($nums); $i++) {
        $current_sum = max($nums[$i], $current_sum + $nums[$i]);
        $max_sum = max($max_sum, $current_sum);
    }

    return $max_sum;
}

/**
 * Test Case 1
 */

$nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];

$output = maxSubArray($nums);

echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 6\n\n";

/**
 * Test Case 2
 */

$nums = [1];
$output = maxSubArray($nums);

echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 1\n\n";

/**
 * Test Case 3
 */

$nums = [5, 4, -1, 7, 8];
$output = maxSubArray($nums);

echo "Case 3:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 23\n\n";
