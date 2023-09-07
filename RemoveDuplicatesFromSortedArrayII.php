<?php
/**
 * Problem NO.80
 *
 * @param integer[] $nums
 * @return integer
 */
function removeDuplicates(&$nums)
{
    $k = 2;
    if (count($nums) < 3) {
        return count($nums);
    }

    for ($i = 2; $i < count($nums); $i++) {
        if ($nums[$i] != $nums[$k - 1] || $nums[$i] != $nums[$k - 2]) {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }

    return $k;
}

/**
 * Test Case 1
 */

$nums = [1, 1, 1, 2, 2, 3];
$output = removeDuplicates($nums);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 5\n\n";

/**
 * Test Case 2
 */

$nums = [0, 0, 1, 1, 1, 1, 2, 3, 3];
$output = removeDuplicates($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 7\n\n";
