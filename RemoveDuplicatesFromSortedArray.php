<?php
/**
 * Problem NO.26
 *
 * @param int[] $nums
 * @return int
 */

function removeDuplicates(&$nums)
{

    $nums = array_unique($nums);
    $total = count($nums);
    return $total;
}

/**
 * Test Case 1
 */

$nums = [1, 1, 2];
$output = removeDuplicates($nums);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$output = removeDuplicates($nums);
echo "Case 2:\n";
echo "Input: num  = ";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 5\n\n";
