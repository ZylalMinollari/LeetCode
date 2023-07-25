<?php

/**
 * Problem NO.40
 *
 * @param integer[] $candidates
 * @param integer $target
 * @return integer[][]
 */

function combinationSum2($candidates, $target)
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

        if ($i > $startIndex && $candidates[$i] === $candidates[$i - 1]) {
            continue;
        }
        $currentCombination[] = $num;

        findCombinations($candidates, $target - $num, $i + 1, $currentCombination, $result);
        array_pop($currentCombination);
    }

}

/**
 * Test Case 1
 */

$candidates = [10, 1, 2, 7, 6, 1, 5];
$target = 8;
$output = combinationSum2($candidates, $target);
echo "Case 1:\n";
echo "Input: candidates = \n";
print_r($candidates);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [
    [1,1,6],
    [1,2,5],
    [1,7],
    [2,6]
    ]\n\n";

/**
 * Test Case 2
 */

$candidates = [2, 5, 2, 1, 2];
$target = 5;
$output = combinationSum2($candidates, $target);
echo "Case 2:\n";
echo "Input: candidates = \n";
print_r($candidates);
echo "target = $target\n";
echo "Output: \n";
print_r($output);
echo "Expected: [
    [1,2,2],
    [5]
    ]\n\n";
