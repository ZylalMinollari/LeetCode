<?php

/**
 * Problem NO.16
 *
 * @param int[] $nums
 * @param int $target
 * @return int
 */

function threeSumClosest($nums, $target)
{
    $n = count($nums);
    $closestSum = $nums[0] + $nums[1] + $nums[2];
    $minDiff = abs($closestSum - $target);

    sort($nums);

    for ($i = 0; $i < $n - 2; $i++) {

        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $sum = $nums[$i] + $nums[$left] + $nums[$right];
            $diff = abs($sum - $target);

            if ($diff < $minDiff) {
                $minDiff = $diff;
                $closestSum = $sum;
            } elseif ($sum < $target) {
                $left++;
            } elseif ($sum > $target) {
                $right--;
            } else {
                return $sum;
            }
        }
    }

    return $closestSum;
}

/**
 * Test Case 1
 */

$nums = [-1, 2, 1, -4];
$target = 1;
$output = threeSumClosest($nums, $target);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "     target = $target\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums = [0, 0, 0];
$target = 1;
$output = threeSumClosest($nums, $target);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "     target = $target\n";
echo "Output: $output\n";
echo "Expected: 0\n\n";
