<?php

/**
 * Problem NO.13
 * 
 * @param string $s
 * @return int
 */
function romanToInt($s)
{
    $romanNums = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    $intigerValue = 0;
    foreach ($romanNums as $symbol => $value) {
        while (strpos($s, $symbol) === 0) {
            $intigerValue += $value;
            $s = substr($s, strlen($symbol));
        }
    }

    return $intigerValue;
}

/**
 * Test Case 1
 */

$s = "III";
$output = romanToInt($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 3\n\n";

/**
 * Test Case 2
 */

$s = "LVIII";
$output = romanToInt($s);
echo "Case 2:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 58\n\n";

/**
 * Test Case 3
 */

$s = "MCMXCIV";
$output = romanToInt($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 1994\n\n";
