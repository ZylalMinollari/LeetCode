<?php

/**
 * Problem NO.22
 *
 * @param int $n
 * @return string[]
 */

function generateParenthesis($n)
{
    $result = [];
    backtrack($result, '', 0, 0, $n);
    return $result;
}

function backtrack(&$result, $current, $open, $close, $max)
{
    if (strlen($current) === $max * 2) {
        $result[] = $current;
        return;
    }
    if ($open < $max) {
        backtrack($result, $current . '(', $open + 1, $close, $max);
    }
    if ($close < $open) {
        backtrack($result, $current . ')', $open, $close + 1, $max);
    }
}

/**
 * Test Case 1
 */

$n = 3;
$output = generateParenthesis($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: ";
print_r($output);
echo "Expected: ['((()))','(()())','(())()','()(())','()()()']\n\n";

/**
 * Test Case 2
 */

$n = 1;
$output = generateParenthesis($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: ['()']\n\n";
