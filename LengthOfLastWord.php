<?php

/**
 * Problem NO.58
 *
 * @param string $s
 * @return integer
 */

function lengthOfLastWord($s)
{
    $length = 0;
    $i = strlen($s) - 1;
    while ($i >= 0 && $s[$i] == ' ') {
        $i -= 1;
    }

    while ($i >= 0 && $s[$i] != ' ') {
        $length += 1;
        $i -= 1;
    }

    return $length;
}

/**
 * Test Case 1
 */

$s = "Hello World";
$output = lengthOfLastWord($s);
echo "Case 1:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 5\n\n";

/**
 * Test Case 2
 */

$s = "   fly me   to   the moon  ";
$output = lengthOfLastWord($s);
echo "Case 2:\n";
echo "Input: x = $s\n";
echo "Output: $output\n";
echo "Expected: 4\n\n";

/**
 * Test Case 3
 */

$s = "luffy is still joyboy";
$output = lengthOfLastWord($s);
echo "Case 3:\n";
echo "Input: s = $s\n";
echo "Output: $output\n";
echo "Expected: 6\n\n";
