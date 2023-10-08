<?php

/**
 * Problem NO.35
 *
 * @param integer[] $nums
 * @param integer $target
 * @return integer
 */

function searchInsert($nums, $target)
{
    $key = array_search($target, $nums);
    if ($key !== false) {
        return $key;
    }

    $nums[] = $target;
    sort($nums);
    return array_search($target, $nums);
}

/**
 * Test Case 1
 */

$nums = [1, 3, 5, 6];
$target = 5;
$output = searchInsert($nums, $target);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums = [1, 3, 5, 6];
$target = 2;
$output = searchInsert($nums, $target);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: $output\n";
echo "Expected: 1\n\n";

/**
 * Test Case 3
 */
$nums = [1, 3, 5, 6];
$target = 7;
$output = searchInsert($nums, $target);
echo "Case 3:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: $output\n";
echo "Expected: 4\n\n";
