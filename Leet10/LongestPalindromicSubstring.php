<?php

/**
 * Problem NO.5
 *
 * @param string $s
 * @return string
 */
function longestPalindrome($s)
{
    $start = 0;
    $maxLength = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $len1 = expandFromCenter($s, $i, $i);
        $len2 = expandFromCenter($s, $i, $i + 1);

        $len = max($len1, $len2);

        if ($len > $maxLength) {
            $start = $i - intval(($len - 1) / 2);
            $maxLength = $len;
        }
    }

    return substr($s, $start, $maxLength);
}

function expandFromCenter($s, $left, $right)
{
    while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
        $left--;
        $right++;
    }

    return $right - $left - 1;
}


/**
 * Test Case 1
 */

 $s = "babad";
 $output = longestPalindrome($s);
 echo "Case 1:\n";
 echo "target = $s\n";
 echo "Output: $output\n";
 echo "Expected: bab\n\n";
 
 /**
  * Test Case 2
  */
 
 $s = "cbbd";
 $output = longestPalindrome($s);
 echo "Case 2:\n";
 echo "target = $s\n";
 echo "Output: $output\n";
 echo "Expected: bb\n\n";