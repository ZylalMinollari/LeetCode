<?php

/**
 * Problem NO.77
 *
 * @param integer $n
 * @param integer $k
 * @return integer[][]
 */

function combine($n, $k)
{
    $combination = [];
    $result = [];
    generateCombine(1, $n, $k, $combination, $result);
    return $result;
}

function generateCombine($i, $n, $k, &$combination, &$result)
{
    if ($k == 0) {
        $result[] = $combination;
        return;
    }

    if ($k > $n - $i + 1) return;
    if ($i > $n) return;
    
    $combination[] = $i;

    generateCombine($i + 1, $n, $k - 1, $combination, $result);
    array_pop($combination);
    generateCombine($i + 1, $n, $k, $combination, $result);
}

/**
 * Test Case 1
 */

$n = 4;
$k = 2;
$output = combine($n, $k);
echo "Case 1:\n";
echo "Input: n = $n, k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]\n\n";

/**
 * Test Case 2
 */

$n = 1;
$k = 1;
$output = combine($n, $k);
echo "Case 2:\n";
echo "Input: n = $n, k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[1]]\n\n";
