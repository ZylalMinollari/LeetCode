<?php

/**
 * Problem NO.73
 *
 * @param integer[][] $matrix
 * @return void
 */

function setZeroes(&$matrix)
{
    $zeros = [];

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[0]); $j++) {
            if ($matrix[$i][$j] == 0) {
                $zeros[] = [$i, $j];
            }
        }
    }
    foreach ($zeros as $zero) {
        $row = $zero[0];
        $col = $zero[1];

        for ($i = 0; $i < count($matrix[0]); $i++) {
            $matrix[$row][$i] = 0;
        }
        for ($j = 0; $j < count($matrix); $j++) {
            $matrix[$j][$col] = 0;
        }
    }
}

/**
 * Test Case 1
 */

$matrix = [
    [1, 1, 1],
    [1, 0, 1],
    [1, 1, 1]
];

echo "Case 1:\n";
echo "Input: matrix = \n";
print_r($matrix);
setZeroes($matrix);
echo "Output: \n";
print_r($matrix);
echo "Expected: [[1,0,1],[0,0,0],[1,0,1]]\n\n";

/**
 * Test Case 2
 */

$matrix = [
    [0, 1, 2, 0],
    [3, 4, 5, 2],
    [1, 3, 1, 5]
];

echo "Case 2:\n";
echo "Input: matrix =\n";
print_r($matrix);
setZeroes($matrix);
echo "Output: \n";
print_r($matrix);
echo "Expected: [[0,0,0,0],[0,4,5,0],[0,3,1,0]]\n\n";
