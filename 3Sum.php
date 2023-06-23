<?php

/**
 * Problem NO.15
 *
 * @param int[] $nums
 * @return int[][];
 */
function threeSum($nums)
{
    $result = [];
    $n = count($nums);

    sort($nums);
    for ($i = 0; $i < $n - 2; $i++) {

        if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
            continue;
        }

        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $sum = $nums[$i] + $nums[$left] + $nums[$right];

            if ($sum === 0) {
                $triplet = array($nums[$i], $nums[$left], $nums[$right]);
                $result[] = $triplet;

                while ($left < $right && $nums[$left] === $nums[$left + 1]) {
                    $left++;
                }

                while ($left < $right && $nums[$right] === $nums[$right - 1]) {
                    $right--;
                }

                $left++;
                $right--;
            } elseif ($sum < 0) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    return $result;
}

/**
 * Test Case 1
 */

$nums = [-1, 0, 1, 2, -1, -4];
$output = threeSum($nums);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: ";
print_r($output);
echo "Expected: [[-1,-1,2],[-1,0,1]]\n\n";

/**
 * Test Case 2
 */

$nums = [0, 1, 1];
$output = threeSum($nums);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: ";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */

$nums = [0, 0, 0];
$output = threeSum($nums);
echo "Case 3:\n";
echo "Input: nums = ";
print_r($nums);
echo "Output: ";
print_r($output);
echo "Expected: [[0,0,0]]\n\n";
