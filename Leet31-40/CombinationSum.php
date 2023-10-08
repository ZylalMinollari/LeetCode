<?php

/**
 * Problem NO.39
 *
 * @param integer[] $candidates
 * @param integer $target
 * @return integer[][]
 */

function combinationSum($candidates, $target)
{
    $result = [];
    $currentCombination = [];
    $startIndex = 0;

    sort($candidates);
    findCombinations($candidates, $target, $startIndex, $currentCombination, $result);
    return $result;
}

function findCombinations($candidates, $target, $startIndex, $currentCombination, &$result)
{
    if ($target === 0) {
        $result[] = $currentCombination;
        return;
    }

    for ($i = $startIndex; $i < count($candidates); $i++) {
        $num = $candidates[$i];
        if ($num > $target) {
            break;
        }
        $currentCombination[] = $num;

        findCombinations($candidates, $target - $num, $i, $currentCombination, $result);
        array_pop($currentCombination);
    }

}

/**
 * Test Case 1
 */

$candidates = [2, 3, 6, 7];
$target = 7;
$output = combinationSum($candidates, $target);
echo "Case 1:\n";
echo "Input: candidates = \n";
print_r($candidates);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[2,2,3],[7]]\n\n";

/**
 * Test Case 2
 */

$candidates = [2, 3, 5];
$target = 8;
$output = combinationSum($candidates, $target);
echo "Case 2:\n";
echo "Input: candidates = \n";
print_r($candidates);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[2,2,2,2],[2,3,3],[3,5]]\n\n";

/**
 * Test Case 3
 */

$candidates = [2];
$target = 1;
$output = combinationSum($candidates, $target);
echo "Case 3:\n";
print_r($candidates);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";
