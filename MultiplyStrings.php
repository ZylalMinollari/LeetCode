<?php

/**
 * Problem NO.43
 *
 * @param string $num1
 * @param string $num2
 * @return string
 */

function multiply($num1, $num2)
{
    $length1 = strlen($num1);
    $length2 = strlen($num2);
    $product = array_fill(0, $length1 + $length2, 0);

    for ($i = $length1 - 1; $i >= 0; $i--) {
        for ($j = $length2 - 1; $j >= 0; $j--) {
            $digit1 = intval($num1[$i]);
            $digit2 = intval($num2[$j]);

            $temp = $digit1 * $digit2 + $product[$i + $j + 1];
            $product[$i + $j + 1] = $temp % 10;

            $carry = intval($temp / 10);
            $product[$i + $j] += $carry;
        }
    }
    $result = implode("", $product);
    $result = ltrim($result, '0');
    return $result === "" ? "0" : $result;
}

/**
 * Test Case 1
 */

$num1 = "2";
$num2 = "3";
$output = multiply($num1, $num2);
echo "Case 1:\n";
echo "Input: num1 = $num1, num2 = $num2\n";
echo "Output: $output\n";
echo "Expected: '6'\n\n";

/**
 * Test Case 2
 */

$num1 = "123";
$num2 = "456";
$output = multiply($num1, $num2);
echo "Case 2:\n";
echo "Input: num1 = $num1, num2 = $num2\n";
echo "Output: $output\n";
echo "Expected: '56088'\n\n";
