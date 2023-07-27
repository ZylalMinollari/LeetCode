<?php

/**
 * Problem NO.42
 *
 * @param integer[] $height
 * @return integer
 */

function trap($height)
{
    $n = count($height);

    if ($n == 0) {
        return 0;
    }

    $left = 0;
    $right = $n - 1;
    $leftMax = 0;
    $rightMax = 0;
    $water = 0;

    while ($left < $right) {
        if ($height[$left] < $height[$right]) {
            if ($height[$left] > $leftMax) {
                $leftMax = $height[$left];
            } else {
                $water += $leftMax - $height[$left];
            }
            $left++;
        } else {
            if ($height[$right] > $rightMax) {
                $rightMax = $height[$right];
            } else {
                $water += $rightMax - $height[$right];
            }
            $right--;
        }
    }
    return $water;

}

/**
 * Test Case 1
 */

$height = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
$output = trap($height);
echo "Case 1:\n";
echo "Input: height = \n";
print_r($height);
echo "Output: $output\n";
echo "Expected: 6\n\n";

/**
 * Test Case 2
 */

$height = [4, 2, 0, 3, 2, 5];
$output = trap($height);
echo "Case 2:\n";
echo "Input: height = \n";
print_r($height);
echo "Output: $output\n";
echo "Expected: 9\n\n";
