<?php

/**
 * Problem NO.31
 *
 * @param integer[] $nums
 * @return void
 */
function nextPermutation(&$nums)
{
    $n = count($nums);
    $i = $n - 2;
    while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) {
        $i--;
    }
    if ($i >= 0) {
        $j = $n - 1;
        while ($j >= $i && $nums[$j] <= $nums[$i]) {
            $j--;
        }
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
    reverse($nums, $i + 1, $n - 1);
}

function reverse(&$nums, $start, $end)
{
    while ($start < $end) {
        $temp = $nums[$start];
        $nums[$start] = $nums[$end];
        $nums[$end] = $temp;
        $start++;
        $end--;

    }
}
/**
 * Test Case 1
 */

$nums = [1, 2, 3];
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
nextPermutation($nums);
echo "Output: ";
print_r($nums);
echo "Expected: [1,3,2]\n\n";

/**
 * Test Case 2
 */

$nums = [3, 2, 1];
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
nextPermutation($nums);
echo "Output: ";
print_r($nums);
echo "Expected: [1,2,3]\n\n";

/**
 * Test Case 3
 */

$nums = [1, 1, 5];
echo "Case 1:\n";
echo "Input: nums =  ";
print_r($nums);
nextPermutation($nums);
echo "Output: ";
print_r($nums);
echo "Expected: [1,5,1]\n\n";
