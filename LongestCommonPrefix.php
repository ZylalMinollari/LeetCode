<?php

/**
 * Problem NO.14
 *
 * @param string[] $strs
 * @return string
 */
function longestCommonPrefix($strs)
{
    if (empty($strs)) {
        return '';
    }

    $prefix = $strs[0];

    for ($i = 0; $i < count($strs); $i++) {
        while (strpos($strs[$i], $prefix) !== 0) {
            $prefix = substr($prefix, 0, strlen($prefix) - 1);
        }

        if (empty($prefix)) {
            return '';
        }
    }

    return $prefix;
}

/**
 * Test Case 1
 */

$strs = ["flower","flow","flight"];
$output = longestCommonPrefix($strs);
echo "Case 1:\n";
echo "Input: strs = ";
print_r($strs);
echo "Output: $output\n";
echo "Expected: fl\n\n";

/**
 * Test Case 2
 */

$strs = ["dog","racecar","car"];
$output = longestCommonPrefix($strs);
echo "Case 2:\n";
echo "Input: strs = ";
print_r($strs);
echo "Output: $output\n";
echo "Expected: \n\n";