<?php

/**
 * Problem NO.10
 *
 * @param string $s
 * @param string $p
 * @return boolean
 */
function isMatch($s, $p)
{
    $m = strlen($s);
    $n = strlen($p);

    $dp = array_fill(0, $m + 1, array_fill(0, $n + 1, false));
    $dp[0][0] = true;

    for ($j = 1; $j <= $n; $j++) {
        if ($p[$j - 1] == '*') {
            $dp[0][$j] = $dp[0][$j - 2];
        }
    }

    for ($i = 1; $i <= $m; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($p[$j - 1] == '.' || $p[$j - 1] == $s[$i - 1]) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1];
            } elseif ($p[$j - 1] == '*') {
                $dp[$i][$j] = $dp[$i][$j - 2];
                if ($p[$j - 2] == '.' || $p[$j - 2] == $s[$i - 1]) {
                    $dp[$i][$j] = $dp[$i][$j] || $dp[$i - 1][$j];
                }
            } else {
                $dp[$i][$j] = false;
            }

        }
    }

    return $dp[$m][$n];
}

/**
 * Test Case 1
 */

$s = "aa";
$p = "a";
$output = isMatch($s, $p);
echo "Case 1:\n";
echo "Input: s = $s,    p = $p\n";
echo "Output: $output\n";
echo "Expected: false\n\n";

/**
 * Test Case 2
 */

$s = "aa";
$p = "a*";
$output = isMatch($s, $p);
echo "Case 2:\n";
echo "Input: s = $s,    p = $p\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 3
 */

$s = "ab";
$p = ".*";
$output = isMatch($s, $p);
echo "Case 3:\n";
echo "Input: s = $s,    p = $p\n";
echo "Output: $output\n";
echo "Expected: true\n\n";