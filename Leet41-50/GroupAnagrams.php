<?php

/**
 * Problem NO.49
 *
 * @param string[] $strs
 * @return string[][]
 */

function groupAnagrams($strs)
{
    $hashmap = [];

    foreach ($strs as $string) {
        $sortedStr = str_split($string);
        sort($sortedStr);
        $sortedStr = implode("", $sortedStr);
        if (!array_key_exists($sortedStr, $hashmap)) {
            $hashmap[$sortedStr] = [];
        }
        $hashmap[$sortedStr][] = $string;
    }

    return array_values($hashmap);
}

/**
 * Test Case 1
 */

$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$output = groupAnagrams($strs);
echo "Case 1:\n";
echo "Input: strs = \n";
print_r($strs);
echo "Output: \n";
print_r($output);
echo "Expected: [['bat'],['nat','tan'],['ate','eat','tea']]\n\n";

/**
 * Test Case 2
 */

$strs = [""];
$output = groupAnagrams($strs);
echo "Case 2:\n";
echo "Input: strs = \n";
print_r($strs);
echo "Output: \n";
print_r($output);
echo "Expected: ['']\n\n";

/**
 * Test Case 3
 */

$strs = ["a"];
$output = groupAnagrams($strs);
echo "Case 3:\n";
echo "Input: strs = \n";
print_r($strs);
echo "Output: \n";
print_r($output);
echo "Expected: [['a']]\n\n";
