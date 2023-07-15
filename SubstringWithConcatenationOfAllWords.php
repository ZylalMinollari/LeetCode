<?php

/**
 * Problem NO.30
 *
 * @param string $s
 * @param string[] $words
 * @return integer[]
 */

function findSubstring($s, $words)
{
    $wordLength = strlen($words[0]);
    $totalLength = count($words) * $wordLength;
    $wordFreq = array_count_values($words);
    $result = [];
    for ($i = 0; $i <= strlen($s) - $totalLength; $i++) {
        $seen = [];
        $j = 0;
        while ($j < $totalLength) {
            $word = substr($s, $i + $j, $wordLength);
            if (isset($wordFreq[$word])) {
                $seen[$word] = isset($seen[$word]) ? $seen[$word] + 1 : 1;
                if ($seen[$word] > $wordFreq[$word]) {
                    break;
                }
                $j += $wordLength;
            } else {
                break;
            }
        }
        if ($j === $totalLength) {
            $result[] = $i;
        }
    }
    return $result;
}

/**
 * Test Case 1
 */

$s = "barfoothefoobarman";
$words = ["foo", "bar"];
$output = findSubstring($s, $words);
echo "Case 1:\n";
echo "Input: s = $s, ";
print_r($words);
echo "Output: \n";
print_r($output);
echo "Expected: [0,9]\n\n";

/**
 * Test Case 2
 */

$s = "wordgoodgoodgoodbestword";
$words = ["word", "good", "best", "word"];
$output = findSubstring($s, $words);
echo "Case 2:\n";
echo "Input: s = $s, ";
print_r($words);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */
$s = "barfoofoobarthefoobarman";
$words = ["bar", "foo", "the"];
$output = findSubstring($s, $words);
echo "Case 3:\n";
echo "Input: s = $s, ";
print_r($words);
echo "Output: \n";
print_r($output);
echo "Expected: [6,9,12]\n\n";
