<?php

/**
 * Problem NO.7
 * 
 * @param int $x
 * @return int
 */
function reverse($x)
{
    $isNegative = $x < 0;
    $x = abs($x);

    $reversed = 0;

    while ($x > 0) {
        $reversed = $reversed * 10 + $x % 10;
        $x = (int) ($x / 10);
    }

    if ($isNegative) {
        $reversed *= -1;
    }
    if ($reversed < -pow(2, 31) || $reversed > pow(2, 31) - 1) {
        return 0;
    }

    return $reversed;
}

/**
 * Test Case 1
 */

$x = 123;
$output = reverse($x);
echo "Case 1:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: 321\n\n";

/**
 * Test Case 2
 */

$x = -123;
$output = reverse($x);
echo "Case 2:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: -321\n\n";

/**
 * Test Case 3
 */

$x = 120;
$output = reverse($x);
echo "Case 3:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: 21\n\n";
