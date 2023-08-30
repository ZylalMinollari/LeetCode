<?php

/**
 * Problem NO.72
 *
 * @param string $word1
 * @param string $word2
 * @return integer
 */

function minDistance($word1, $word2)
{
    $m = strlen($word1);
    $n = strlen($word2);
    $dp = [];

    for ($i = 0; $i <= $m; $i++) {
        $dp[$i][0] = $i;
    }
    for ($j = 0; $j <= $n; $j++) {
        $dp[0][$j] = $j;
    }

    for ($i = 1; $i <= $m; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($word1[$i - 1] == $word2[$j - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1];
            } else {
                $dp[$i][$j] =  min($dp[$i][$j - 1], $dp[$i - 1][$j], $dp[$i - 1][$j - 1]) + 1;
            }
        }
    }

    return $dp[$m][$n];
}

/**
 * Test Case 1
 */

$word1 = "horse";
$word2 = "ros";
$output = minDistance($word1, $word2);

echo "Case 1:\n";
echo "Input: word1 = $word1, word2 = $word2\n";
echo "Output: $output\n";
echo "Expected: 3\n\n";

/**
 * Test Case 2
 */

$word1 = "intention";
$word2 = "execution";
$output = minDistance($word1, $word2);

echo "Case 2:\n";
echo "Input: word1 = $word1, word2 = $word2\n";
echo "Output: $output\n";
echo "Expected: 5\n\n";
