<?php

/**
 * Problem NO.18
 *
 * @param int[] $nums
 * @param int $target
 * @return int[][]
 */
function fourSum($nums, $target)
{
    $result = [];
    $n = count($nums);

    sort($nums);

    for ($i = 0; $i < $n - 3; $i++) {
        if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
            continue;
        }

        for ($j = $i + 1; $j < $n - 2; $j++) {
            if ($j > $i + 1 && $nums[$j] === $nums[$j - 1]) {
                continue;
            }

            $left = $j + 1;
            $right = $n - 1;

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$j] + $nums[$left] + $nums[$right];

                if ($sum === $target) {
                    $result[] = [$nums[$i], $nums[$j], $nums[$left], $nums[$right]];

                    while ($left < $right && $nums[$left] === $nums[$left + 1]) {
                        $left++;
                    }

                    while ($left < $right && $nums[$right] === $nums[$right - 1]) {
                        $right--;
                    }

                    $left++;
                    $right--;
                } elseif ($sum < $target) {
                    $left++;
                } else {
                    $right--;
                }
            }

        }
    }
    return $result;
}

/**
 * Test Case 1
 */

$nums = [1, 0, -1, 0, -2, 2];
$target = 0;
$output = fourSum($nums, $target);
echo "Case 1:\n";
echo "Input: nums = ";
print_r($nums);
echo "     target = $target\n";
echo "Output: ";
print_r($output);
echo "Expected: [[-2,-1,1,2],[-2,0,0,2],[-1,0,0,1]]\n\n";

/**
 * Test Case 2
 */

$nums = [2, 2, 2, 2, 2];
$target = 8;
$output = fourSum($nums, $target);
echo "Case 2:\n";
echo "Input: nums = ";
print_r($nums);
echo "     target = $target\n";
echo "Output: ";
print_r($output);
echo "Expected: [[2,2,2,2]]\n\n";
