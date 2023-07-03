<?php

/**
 * Problem NO.20
 *
 * @param string $s
 * @return boolean
 */
function isValid($s)
{
    $stack = [];
    $brackets = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if (array_key_exists($char, $brackets)) {
            if (empty($stack) || $stack[count($stack) - 1] !== $brackets[$char]) {
                return false;
            }
            array_pop($stack);
        } else {
            array_push($stack, $char);
        }
    }
    return empty($stack);
}

/**
 * Test Case 1
 */

$s = "()";
$output = isValid($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$s = "()[]{}";
$output = isValid($s);
echo "Case 2:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 3
 */

$s = "(]";
$output = isValid($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: \n\n";
