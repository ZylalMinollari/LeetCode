<?php
/**
 * Problem NO.32
 *
 * @param string $s
 * @return integer
 */

function longestValidParentheses($s)
{
    $stack = [];
    $maxLength = 0;

    array_push($stack, -1);
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] === '(') {
            array_push($stack, $i);
        } else {
            array_pop($stack);

            if (empty($stack)) {
                array_push($stack, $i);
            } else {
                $length = $i - end($stack);
                $maxLength = max($maxLength, $length);
            }
        }
    }
    return $maxLength;
}
/**
 * Test Case 1
 */

$s = "(()";
$output = longestValidParentheses($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$s = ")()())";
$output = longestValidParentheses($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 4\n\n";

/**
 * Test Case 3
 */

$s = "";
$output = longestValidParentheses($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 0\n\n";
