<?php

/**
 * Problem NO.69
 *
 * @param integer $x
 * @return integer
 */
function mySqrt($x)
{
    if ($x < 2) {
        return $x;
    }

    $left = 1;
    $right = $x;

    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);
        $midSquared = $mid * $mid;

        if ($midSquared == $x) {
            return $mid;
        } else if($midSquared < $x) {
            $left = $mid +1;
        }
        else {
            $right = $mid -1;
        }
    }
    return $right;
}

/**
 * Test Case 1
 */

$x = 4;
$output = mySqrt($x);
echo "Case 1:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$x = 8;
$output = mySqrt($x);
echo "Case 2:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";