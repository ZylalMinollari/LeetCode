<?php

/**
 * Problem NO.65
 * @param string $s
 * @return boolean
 */

function isNumber($s)
{
    if (is_numeric($s)) {
        return true;
    }
    return  false;
}

/**
 * Test Case 1
 */
$s = "0";
$output = isNumber($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$s = "e";
$output = isNumber($s);
echo "Case 2:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: false\n\n";

/**
 * Test Case 3
 */

$s = ".";
$output = isNumber($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: false\n\n";
