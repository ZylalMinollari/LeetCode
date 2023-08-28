<?php

/**
 * Problem NO.70
 *
 * @param integer $n
 * @return integer
 */

function climbStairs($n)
{
    $dp = array();
    $dp[0] = 1;
    $dp[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }
    return $dp[$n];
}

/**
 * Test Case 1
 */

$n = 2;
$output = climbStairs($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$n = 3;
$output = climbStairs($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: 3\n\n";
