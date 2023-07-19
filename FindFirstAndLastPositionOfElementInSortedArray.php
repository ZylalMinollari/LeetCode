<?php

/**
 * Problem NO.34
 *
 * @param integer[] $nums
 * @param integer $target
 * @return integer[]
 */
function searchRange($nums, $target)
{
    $min = -1;
    $max = -1;
    foreach ($nums as $key => $value) {
        if ($value == $target) {
            if ($min == -1) {
                $min = $key;
            }

            if ($key > $max) {
                $max = $key;
            }

        }
    }
    return [$min, $max];
}

/**
 * Test Case 1
 */

$nums = [5, 7, 7, 8, 8, 10];
$target = 8;
$output = searchRange($nums, $target);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [3,4]\n\n";

/**
 * Test Case 2
 */

$nums = [5, 7, 7, 8, 8, 10];
$target = 6;
$output = searchRange($nums, $target);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [-1,-1]\n\n";

/**
 * Test Case 3
 */
$nums = [];
$target = 0;
$output = searchRange($nums, $target);
echo "Case 3:\n";
echo "Input: nums = ";
print_r($nums);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [-1,-1]\n\n";
