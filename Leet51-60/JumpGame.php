<?php

/**
 * Solution of Problem NO.55
 *
 * @param integer[] $nums
 * @return boolean
 */

function canJump($nums)
{
    $furthest = 0;

    if (count($nums) == 1) {
        return true;
    }

    for ($i = 0; $i <= count($nums) - 1; $i++) {
        $furthest = max($furthest, $i + $nums[$i]);

        if ($furthest <= $i && $nums[$i] == 0) {
            return false;
        }

        if ($furthest >= count($nums) - 1) {
            return true;
        }
    }
    return false;
}

/**
 * Test Case 1
 */

$nums = [2, 3, 1, 1, 4];

$output = canJump($nums);

echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$nums = [3, 2, 1, 0, 4];

$output = canJump($nums);

echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: false\n\n";