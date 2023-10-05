<?php

/**
 * Problem NO.12
 *
 * @param int $num
 * @return string
 */
function intToRoman($num)
{
    $values = [
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

    $result = '';

    foreach ($values as $roman => $value) {
        while ($num >= $value) {
            $result .= $roman;
            $num -= $value;
        }
    }

    return $result;
}

/**
 * Test Case 1
 */

$num = 3;
$output = intToRoman($num);
echo "Case 1:\n";
echo "Input: num = $num\n";
echo "Output: $output\n";
echo "Expected: III\n\n";

/**
 * Test Case 2
 */

$num = 58;
$output = intToRoman($num);
echo "Case 2:\n";
echo "Input: num = $num\n";
echo "Output: $output\n";
echo "Expected: LVIII\n\n";

/**
 * Test Case 3
 */

$num = 1994;
$output = intToRoman($num);
echo "Case 3:\n";
echo "Input: num = $num\n";
echo "Output: $output\n";
echo "Expected: MCMXCIV\n\n";
