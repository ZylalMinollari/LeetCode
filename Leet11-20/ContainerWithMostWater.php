<?php

/**
 * Problem NO.11
 *
 * @param int[] $height
 * @return int
 */
function maxArea($height)
{
    $left = 0;
    $right = count($height) - 1;
    $maxArea = 0;

    while ($left < $right) {

        $area = min($height[$left], $height[$right]) * ($right - $left);

        $maxArea = max($maxArea, $area);

        if ($height[$left] < $height[$right]) {
            $left++;
        } else {
            $right--;
        }
    }

    return $maxArea;
}

/**
 * Test Case 1
 */

$height = [1, 8, 6, 2, 5, 4, 8, 3, 7];
$output = maxArea($height);
echo "Case 1:\n";
echo "Input: height = ";
print_r($height);
echo "Output: $output\n";
echo "Expected: 49\n\n";

/**
 * Test Case 2
 */

$height = [1, 1];
$output = maxArea($height);
echo "Case 2:\n";
echo "Input: height = ";
print_r($height);
echo "Output: $output\n";
echo "Expected: 1\n\n";