<?php

/**
 * Problem NO.75
 *
 * @param integer[] $nums
 * @return void
 */

function sortColors(&$nums)
{
    //Implementation with Dutch Flag Algorithm 

    $red = 0;
    $white = 0;
    $blue = count($nums) - 1;
    while ($white <= $blue) {
        if ($nums[$white] == 0) {
            [$nums[$white], $nums[$red]] = [$nums[$red], $nums[$white]];
            $white++;
            $red++;
        } elseif ($nums[$white] == 1) {
            $white++;
        } else {
            [$nums[$white], $nums[$blue]] = [$nums[$blue], $nums[$white]];
            $blue--;
        }
    }
}

/**
 * Test Case 1
 */

$nums = [2, 0, 2, 1, 1, 0];
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
sortColors($nums);
echo "Output: \n";
print_r($nums);
echo "Expected: [0,0,1,1,2,2]\n\n";

/**
 * Test Case 2
 */

$nums = [2, 0, 1];
echo "Case 2:\n";
echo "Input: nums = \n";
sortColors($nums);
echo "Output: \n";
print_r($nums);
echo "Expected: [0,1,2]\n\n";
