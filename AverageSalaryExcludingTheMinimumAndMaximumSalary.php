<?php

/**
 * Problem NO.1491
 * 
 * @param int[] $salary
 * @return float
 */
function average($salary)
{
    $sum = array_sum($salary) - min($salary) - max($salary);
    $n = count($salary) - 2;
    $average = ($sum) / $n;
    return $average;

}

/**
 * Test Case 1
 */

$salary = [4000, 3000, 1000, 2000];
$output = average($salary);
echo "Case 1:\n";
echo "Input: Salary = ";
print_r($salary);
echo "Output: $output\n";
echo "Expected: 2500\n\n";

/**
 * Test Case 2
 */

$salary = [1000, 2000, 3000];
$output = average($salary);
echo "Case 2:\n";
echo "Input: Salary = ";
print_r($salary);
echo "Output: $output\n";
echo "Expected: 2000\n\n";
