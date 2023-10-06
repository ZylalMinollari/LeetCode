<?php

/**
 * Problem NO.28
 * @param string $haystack
 * @param string $needle
 * @return int
 */

function mystrStr($haystack, $needle)
{
    return str_contains($haystack, $needle) ? strpos($haystack, $needle) : -1;
}

/**
 * Test Case 1
 */

$haystack = "sadbutsad";
$needle = "sad";
$output = mystrStr($haystack, $needle);
echo "Case 1:\n";
echo "Input: haystack = $haystack, needle = $needle\n";
echo "Output: $output\n";
echo "Expected: 0\n\n";

/**
 * Test Case 2
 */

$haystack = "leetcode";
$needle = "leeto";
$output = mystrStr($haystack, $needle);
echo "Case 2:\n";
echo "Input: haystack = $haystack, needle = $needle\n";
echo "Output: $output\n";
echo "Expected: -1\n\n";
