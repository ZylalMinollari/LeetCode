<?php

/**
 * Problem NO.60
 * @param integer $n
 * @param integer $k
 * @return string
 */

function getPermutation($n, $k)
{
    $avaibleNumbers = [];
    $permutation = [];
    for ($i = 1; $i <= $n; $i++) {
        $avaibleNumbers[] = $i;
    }

    $k -= 1;

    for ($i = $n - 1; $i >= 0; $i--) {
        $index = intval($k / factorial($i));
        $k %= factorial($i);
        $selectedNumber = array_splice($avaibleNumbers, $index, 1)[0];
        $permutation[] = $selectedNumber;
    }
    $result = implode("", $permutation);
    return $result;
}

function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

/**
 * Test Case 1
 */

$n = 3;
$k = 3;
$output = getPermutation($n, $k);
echo "Case 1:\n";
echo "Input: n = $n, k = $k\n";
echo "Output: $output\n";
echo "Expected: '213'\n\n";

/**
 * Test Case 2
 */

$n = 4;
$k = 9;
$output = getPermutation($n, $k);
echo "Case 2:\n";
echo "Input: n = $n, k = $k\n";
echo "Output: $output\n";
echo "Expected: '2314'\n\n";

/**
 * Test Case 3
 */

$n = 3;
$k = 1;
$output = getPermutation($n, $k);
echo "Case 3:\n";
echo "Input: n = $n, k = $k \n";
echo "Output: $output\n";
echo "Expected: '123'\n\n";
