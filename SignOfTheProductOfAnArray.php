<?php

/**
 * Problem NO.1822
 *
 * @param int[] $nums
 * @return int
 */

function arraySign($nums)
{
    $prod = array_product($nums);
    return ($prod > 0) ? 1 : (($prod < 0) ? -1 : 0);

}

/**
 * Test Case 1
 */

$nums = [3, 2, 2, 3];
$output = removeElement($nums, $val);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 1\n\n";

/**
 * Test Case 2
 */

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$output = removeElement($nums, $val);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 0\n\n";

/**
 * Test Case 3
 */

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$output = removeElement($nums, $val);
echo "Case 3:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: $output\n";
echo "Expected: -1\n\n";
