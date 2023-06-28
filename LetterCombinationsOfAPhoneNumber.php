<?php

/**
 * Problem NO.17
 *
 * @param string $digits
 * @return string[]
 */

function letterCombinations($digits)
{
    $digitMap = [
        '2' => ['a', 'b', 'c'],
        '3' => ['d', 'e', 'f'],
        '4' => ['g', 'h', 'i'],
        '5' => ['j', 'k', 'l'],
        '6' => ['m', 'n', 'o'],
        '7' => ['p', 'q', 'r', 's'],
        '8' => ['t', 'u', 'v'],
        '9' => ['w', 'x', 'y', 'z'],
    ];

    $combinations = [];

    backtrack($digits, '', 0, $digitMap, $combinations);

    return $combinations;
}

function backtrack($digits, $current, $index, $digitMap, &$combinations)
{
    if ($index === strlen($digits)) {
        if ($current !== '') {
            $combinations[] = $current;
        }
        return;
    }

    $digit = $digits[$index];
    $letters = $digitMap[$digit];

    foreach ($letters as $letter) {
        backtrack($digits, $current . $letter, $index + 1, $digitMap, $combinations);
    }
}

/**
 * Test Case 1
 */

$digits = '23';
$output = letterCombinations($digits);
echo "Case 1:\n";
echo "Input: digits = $digits\n";
echo "Output: ";
print_r($output);
echo "Expected: ['ad','ae','af','bd','be','bf','cd','ce','cf']\n\n";

/**
 * Test Case 2
 */

$digits = '';
$output = letterCombinations($digits);
echo "Case 2:\n";
echo "Input: digits = $digits\n";
echo "Output: ";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */

$digits = '2';
$output = letterCombinations($digits);
echo "Case 3:\n";
echo "Input: digits = $digits\n";
echo "Output: ";
print_r($output);
echo "Expected: ['a','b']\n\n";
