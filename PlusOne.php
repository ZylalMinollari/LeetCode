<?php

/**
 * Problem NO.66
 *
 * @param integer[] $digits
 * @return integer[]
 */

function plusOne($digits)
{
    $n = sizeof($digits);
    for ($i = $n - 1; $i >= 0; $i--) {
        $digits[$i]++;
        if ($digits[$i] < 10) {
            return $digits;
        }

        $digits[$i] = 0;
    }
    array_unshift($digits, 1);
    return $digits;
}

/**
 * Test Case 1
 */

$digits = [1, 2, 3];
$output = plusOne($digits);
echo "Case 1:\n";
echo "Input: digits = \n";
print_r($digits);
echo "Output: \n";
print_r($output);
echo "Expected: [1,2,4]\n\n";

/**
 * Test Case 2
 */

$digits = [4, 3, 2, 1];
$output = plusOne($digits);
echo "Case 2:\n";
echo "Input: digits = \n";
print_r($digits);
echo "Output: \n";
print_r($output);
echo "Expected: [4,3,2,2]\n\n";

/**
 * Test Case 3
 */

$digits = [9];
$output = plusOne($digits);
echo "Case 3:\n";
echo "Input: digits = \n";
print_r($digits);
echo "Output: \n";
print_r($output);
echo "Expected: [1,0]\n\n";
