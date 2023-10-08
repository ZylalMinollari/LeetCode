<?php

/**
 * Problem NO.33
 *
 * @param integer[] $nums
 * @param integer $target
 * @return integer
 */
function search($nums, $target)
{
    $foundKey = -1;
    foreach ($nums as $key => $value) {
        if ($value === $target) {
            $foundKey = $key;
        }
    }
    return $foundKey;
}

/**
 * Test Case 1
 */

$nums = [4, 5, 6, 7, 0, 1, 2];
$target = 0;
$output = search($nums, $target);
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
echo " target = $target\n";
echo "Output: $output \n";
echo "Expected: 4\n\n";

/**
 * Test Case 2
 */

$nums = [4, 5, 6, 7, 0, 1, 2];
$target = 3;
$output = search($nums, $target);
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
echo " target = $target\n";
echo "Output: $output\n";
echo "Expected: -1\n\n";

/**
 * Test Case 3
 */

$nums = [1];
$target = 0;
$output = search($nums, $target);
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
echo " target = $target\n";
echo "Output: $output\n";
echo "Expected: -1\n\n";
