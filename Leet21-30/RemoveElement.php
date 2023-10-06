<?php

/**
 * Problem NO.27
 * 
 * @param int[] $nums
 * @param int $val
 * @return int
 */

function removeElement(&$nums, $val)
{
    $nums = array_diff($nums, [$val]);
    return count($nums);
}

/**
 * Test Case 1
 */

$nums = [3, 2, 2, 3];
$val = 3;
$output = removeElement($nums, $val);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "       val = $val\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$val = 2;
$output = removeElement($nums, $val);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "       val = $val\n";
echo "Output: $output\n";
echo "Expected: 5\n\n";
