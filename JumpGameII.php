<?php

/**
 * Problem NO.45
 *
 * @param integer[] $nums
 * @return integer
 */

function jump($nums)
{
    $maxReach = 0;
    $steps = 0;
    $lastJump = 0;
    for($i = 0; $i <= count($nums)-2; $i++) {
        $maxReach = max($maxReach, $i + $nums[$i]);
        if($i == $lastJump) {
            $lastJump = $maxReach;
            $steps++;
        }
    }

    return $steps;
}

/**
 * Test Case 1
 */

$nums = [2,3,1,1,4];
$output = jump($nums);
echo "Case 1:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums = [2,3,0,1,4];
$output = jump($nums);
echo "Case 2:\n";
echo "Input: nums = \n";
print_r($nums);
echo "Output: $output\n";
echo "Expected: 2\n\n";
