<?php

/**
 * Problem NO.8
 *
 * @param string $s
 * @return int
 */
function myAtoi($s)
{
    $s = str_replace("e","x",$s);
    if (intval($s) < pow(-2, 31)) {
        return -2147483648;
    }
    if (intval($s) > pow(2, 31) - 1) {
        return 2147483647;
    }
    return intval($s);
}

/**
 * Test Case 1
 */

$s = "42";
$output = myAtoi($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 42\n\n";

/**
 * Test Case 2
 */

$s = "   -42";
$numRows = 4;
$output = myAtoi($s);
echo "Case 2:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: -42\n\n";

/**
 * Test Case 3
 */

$s = "4193 with words";
$output = myAtoi($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 4193\n\n";