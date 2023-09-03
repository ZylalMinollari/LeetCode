<?php

/**
 * Problem NO.76
 *
 * @param string $s
 * @param string $t
 * @return string
 */

function minWindow($s, $t)
{
    $length_of_s = strlen($s);
    $length_of_t = strlen($t);

    $left  = 0;
    $right = 0;
    $char_count_s = [];
    $char_count_t = [];
    $min_len = PHP_INT_MAX;
    $min_window_start = 0;
    $char_match_count = 0;
    for ($i = 0; $i < $length_of_t; $i++) {
        if (!isset($char_count_t[$t[$i]])) {
            $char_count_t[$t[$i]] = 0;
        }
        $char_count_t[$t[$i]]++;
    }

    while ($right < $length_of_s) {
        if (isset($char_count_t[$s[$right]])) {
            if (!isset($char_count_s[$s[$right]])) {
                $char_count_s[$s[$right]] = 0;
            }
            $char_count_s[$s[$right]]++;

            if ($char_count_s[$s[$right]] == $char_count_t[$s[$right]]) {
                $char_match_count++;
            }
        }

        while ($char_match_count == count($char_count_t)) {
            if ($right - $left + 1 < $min_len) {
                $min_len = $right - $left + 1;
                $min_window_start = $left;
            }
            if (isset($char_count_t[$s[$left]])) {
                $char_count_s[$s[$left]]--;
                if ($char_count_s[$s[$left]] < $char_count_t[$s[$left]]) {
                    $char_match_count--;
                }
            }
            $left++;
        }

        $right++;
    }

    if ($min_len == PHP_INT_MAX || $min_len < $length_of_t) {
        return "";
    }

    $result = substr($s, $min_window_start, $min_len);

    return $result;
}

/**
 * Test Case 1
 */
$s =  "ADOBECODEBANC";
$t = "ABC";
$output = minWindow($s, $t);
echo "Case 1:\n";
echo "Input: s = $s, t = $t\n";
echo "Output: $output\n";
echo "Expected: 'BANC'\n\n";

/**
 * Test Case 2
 */

$s = "a";
$t = "a";
$output = minWindow($s, $t);
echo "Case 2:\n";
echo "Input: s = $s, t = $t\n";
echo "Output: $output\n";
echo "Expected: 'a'\n\n";

/**
 * Test Case 3
 */

$s = "a";
$t = "aa";
$output = minWindow($s, $t);
echo "Case 3:\n";
echo "Input: s = $s, t = $t\n";
echo "Output: $output\n";
echo "Expected: ''\n\n";
