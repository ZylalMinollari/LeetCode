<?php

/**
 * Problem NO.62
 *
 * @param integer $m
 * @param integer $n
 * @return void
 */

function uniquePaths($m, $n)
{
    $dp = [];
    for($i = 0; $i < $m; $i++) {
        $dp[$i] = array_fill(0,$n,1);
    }

    for($i = 1; $i<$m; $i++) {
        for($j = 1; $j<$n; $j++) {
            $dp[$i][$j] = $dp[$i-1][$j] + $dp[$i][$j-1];
        }
    }

    return $dp[$m-1][$n-1];
}

/**
 * Test Case 1
 */

$m = 3;
$n = 7;
$output = uniquePaths($m, $n);

echo "Case 1:\n";
echo "Input: m = $m , n = $n\n";
echo "Output: $output\n";
echo "Expected: 28\n\n";

/**
 * Test Case 2
 */

$m = 3;
$n = 2;
$output = uniquePaths($m, $n);

echo "Case 2:\n";
echo "Input: m = $m, n = $n \n";
echo "Output: $output\n";
echo "Expected: 3\n\n";