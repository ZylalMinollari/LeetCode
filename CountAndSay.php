<?php

/**
 * Problem NO.38
 *
 * @param integer $n
 * @return string
 */
function countAndSay($n)
{
    if ($n <= 0) {
        return "";
    }

    $result = "1";
    for ($i = 2; $i <= $n; $i++) {
        $count = 1;
        $say = "";
        for ($j = 1; $j < strlen($result); $j++) {
            if ($result[$j] == $result[$j - 1]) {
                $count++;
            } else {
                $say .= $count . $result[$j - 1];
                $count = 1;
            }
        }
        $say .= $count . $result[strlen($result) - 1];
        $result = $say;
    }
    return $result;
}


/**
 * Test Case 1
 */

$n = 1;
$output = countAndSay($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: '1'\n\n";

/**
 * Test Case 2
 */

$n = "4";
$output = countAndSay($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: '1211'\n\n";
