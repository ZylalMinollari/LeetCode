<?php

/**
 * Problem NO.41
 *
 * @param integer[] $nums
 * @return integer
 */

function firstMissingPositive($nums)
{
    $n = count($nums);

    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] <= 0) {
            $nums[$i] = $n + 1;
        }
    }

    for ($i = 0; $i < $n; $i++) {
        $num = abs($nums[$i]);
        if ($num <= $n) {
            $nums[$num - 1] = -abs($nums[$num - 1]);

        }
    }

    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] > 0) {
            return $i + 1;
        }
    }

    return $n + 1;
}

/**
 * Test Case 1
 */

$nums = [1, 2, 0];
$output = firstMissingPositive($nums);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 3\n\n";

/**
 * Test Case 2
 */

$nums = [3, 4, -1, 1];
$output = firstMissingPositive($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 3
 */

$nums = [7, 8, 9, 11, 12];
$output = firstMissingPositive($nums);
echo "Case 3:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 1\n\n";
