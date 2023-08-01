<?php

/**
 * Problem NO.47
 *
 * @param integer[] $nums
 * @return integer[][]
 */

function permuteUnique($nums)
{
    $result = [];
    sort($nums);
    permuteHelper([], $nums, $result);
    return $result;
}

function permuteHelper($currentPermutation, $remaining, &$result)
{
    if (empty($remaining)) {
        $result[] = $currentPermutation;
        return;
    }

    for ($i = 0; $i < count($remaining); $i++) {
        if ($i > 0 && $remaining[$i] == $remaining[$i - 1]) {
            continue;
        }
        $currentPermutation[] = $remaining[$i];
        $newRemaining = array_merge(array_slice($remaining, 0, $i), array_slice($remaining, $i + 1));
        permuteHelper($currentPermutation, $newRemaining, $result);
        array_pop($currentPermutation);
    }
}

/**
 * Test Case 1
 */

$nums = [1, 1, 2];
$output = permuteUnique($nums);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,1,2],[1,2,1],[2,1,1]]\n\n";

/**
 * Test Case 2
 */

$nums = [1, 2, 3];
$output = permuteUnique($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,2,3],[1,3,2],[2,1,3],[2,3,1],[3,1,2],[3,2,1]]\n\n";
