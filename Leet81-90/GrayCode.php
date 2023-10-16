<?php

/**
 * Problem NO.89
 *
 * @param integer $n
 * @return integer[]
 */

function grayCode($n)
{
    if ($n == 0) {
        return [0];
    }

    $sequence = [];
    for ($i = 0; $i <= pow(2, $n) - 1; $i++) {
        $grey_code = $i ^ ($i >> 1);
        $sequence[] = $grey_code;
    }

    return $sequence;
}

/**
 * Test Case 1
 */

$n = 2;
$output = grayCode($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: [0,1,3,2]\n\n";

/**
 * Test Case 2
 */

$n = 1;
$output = grayCode($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected:[0, 1]\n\n";
