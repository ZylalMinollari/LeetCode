<?php

/**
 * Problem NO.9
 * 
 * @param int $x
 * @return boolean
 */
function isPalindrome($x)
{
    $str = (string) $x;
    $str_reverse = strrev($str);
    return ($str === $str_reverse);
}

/**
 * Test Case 1
 */

$x = 121;
$output = isPalindrome($x);
echo "Case 1:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: 1\n\n";

/**
 * Test Case 2
 */

$x = -121;
$output = isPalindrome($x);
echo "Case 2:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: \n\n";

/**
 * Test Case 3
 */

$x = 10;
$output = isPalindrome($x);
echo "Case 3:\n";
echo "Input: x = $x\n";
echo "Output: $output\n";
echo "Expected: \n\n";
