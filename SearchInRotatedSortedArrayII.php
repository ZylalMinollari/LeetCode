<?php

/**
 * Problem NO.81
 *
 * @param integer[] $nums
 * @param integer $target
 * @return boolean
 */

function search($nums, $target)
{
    sort($nums);
    array_unique($nums);
    $left = 0;
    $right = count($nums) - 1;
    while ($left <= $right) {
        $mid = $left + intval(($right - $left) / 2);
        if ($nums[$mid]  == $target) {
            return true;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return false;
}

/**
 * Test Case 1
 */

$nums = [2, 5, 6, 0, 0, 1, 2];
$target = 0;
$output = search($nums, $target);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo " target = $target\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$nums = [2, 5, 6, 0, 0, 1, 2];
$target = 3;
$output = search($nums, $target);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo " target = $target\n";
echo "Output: $output\n";
echo "Expected: false\n\n";