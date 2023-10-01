<?php
/**
 * Problem NO.3
 * 
 * @param string $s
 * @return int
 */
function lengthOfLongestSubstring(string $s)
{

    $max = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $chars = array();
        $sub = '';
        for ($j = $i; $j < strlen($s); $j++) {
            if (in_array($s[$j], $chars)) {
                break;
            }
            $sub .= $s[$j];
            $chars[] = $s[$j];
        }
        if (strlen($sub) > $max) {
            $max = strlen($sub);
        }
    }
    return $max;
}

/**
 * Test Case 1
 */

$s = "abcabcbb";
$output = lengthOfLongestSubstring($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 3\n\n";

/**
 * Test Case 2
 */

$s = "bbbbb";
$output = lengthOfLongestSubstring($s);
echo "Case 2:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 1\n\n";

/**
 * Test Case 3
 */

$s = "pwwkew";
$output = lengthOfLongestSubstring($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 3\n\n";
