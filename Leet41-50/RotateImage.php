<?php

/**
 * Problem NO.48
 *
 * @param integer[][] $matrix
 * @return void
 */

function rotate(&$matrix)
{
    $n = sizeof($matrix);

    for ($j = 0; $j < floor($n / 2); $j++) {
        $first = $j;
        $last = $n - 1 - $j;

        for ($i = $first; $i <= $last - 1; $i++) {
            $offset = $i - $first;
            $top = $matrix[$first][$i];
            $matrix[$first][$i] = $matrix[$last - $offset][$first];
            $matrix[$last - $offset][$first] = $matrix[$last][$last - $offset];
            $matrix[$last][$last - $offset] = $matrix[$i][$last];
            $matrix[$i][$last] = $top;
        }
    }
}

/**
 * Test Case 1
 */

$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo "Case 1:\n";
echo "Input: matrix = \n";
print_r($matrix);
rotate($matrix);
echo "Output: \n";
print_r($matrix);
echo "Expected: [[7,4,1],[8,5,2],[9,6,3]]\n\n";

/**
 * Test Case 2
 */

$matrix = [[5, 1, 9, 11], [2, 4, 8, 10], [13, 3, 6, 7], [15, 14, 12, 16]];
echo "Case 2:\n";
echo "Input: matrix = \n";
print_r($matrix);
rotate($matrix);
echo "Output: \n";
print_r($matrix);
echo "Expected: [[15,13,2,5],[14,3,4,1],[12,6,8,9],[16,7,10,11]]\n\n";
