<?php

/**
 * Problem NO.67
 *
 * @param string $a
 * @param string $b
 * @return string
 */

function addBinary($a, $b)
{
    $result = "";
    $carry = 0;
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;

    while ($i >= 0 || $j >= 0 || $carry > 0) {
        $sum = $carry;
        if ($i >= 0) {
            $sum += (int) ($a[$i]);
            $i -= 1;
        }
        if ($j >= 0) {
            $sum += (int) ($b[$j]);
            $j -= 1;
        }

        $result = (string) ($sum % 2) . $result;
        $carry = (int) ($sum / 2);
    }
    return $result;
}

/**
 * Test Case 1
 */

$a = "11";
$b = "1";
$output = addBinary($a, $b);
echo "Case 1:\n";
echo "Input: a = $a, b = $b\n";
echo "Output: $output\n";
echo "Expected: '100'\n\n";

/**
 * Test Case 2
 */

$a = "1010";
$b = "1011";
$output = addBinary($a, $b);
echo "Case 2:\n";
echo "Input: a = $a, b = $b\n";
echo "Output: $output\n";
echo "Expected: '10101'\n\n";
