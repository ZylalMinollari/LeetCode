<?php

/**
 * Problem NO.74
 *
 * @param integer[][] $matrix
 * @param integer $target
 * @return boolean
 */

function searchMatrix($matrix, $target)
{
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $left = 0;
    $right = ($cols * $rows) - 1;
    while ($right >= $left) {
        $mid = intval(($left + $right) / 2);
        $midRow = intval($mid / $cols);
        $midCol = $mid % $cols;
        $midValue = $matrix[$midRow][$midCol];

        if ($midValue == $target) {
            return true;
        } elseif ($midValue < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return false;
}

/**
 * Test Case 1
 */

$matrix = [
    [1, 3, 5, 7],
    [10, 11, 16, 20],
    [23, 30, 34, 60]
];
$target = 3;
$output = searchMatrix($matrix, $target);
echo "Case 1:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo " target = $target\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$matrix = [
    [1, 3, 5, 7],
    [10, 11, 16, 20],
    [23, 30, 34, 60]
];
$target = 13;
$output = searchMatrix($matrix, $target);
echo "Case 2:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo " target = $target\n";
echo "Output: $output \n";
echo "Expected: false\n\n";
