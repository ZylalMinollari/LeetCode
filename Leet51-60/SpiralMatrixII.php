<?php

/**
 * Problem NO.59
 *
 * @param integer $n
 * @return integer [][]
 */

function generateMatrix($n)
{
    $matrix  = [];

    for ($i = 0; $i < $n; $i++) {
        $matrix[$i] = array_fill(0, $n, 0);
    }

    $num = 1;
    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

    while ($num <= pow($n, 2)) {

        for ($i = $left; $i <= $right; $i++) {
            $matrix[$top][$i] = $num++;
        }
        $top++;


        for ($i = $top; $i <= $bottom; $i++) {
            $matrix[$i][$right] = $num++;
        }
        $right--;



        for ($i = $right; $i >= $left; $i--) {
            $matrix[$bottom][$i] = $num++;
        }
        $bottom--;


        for ($i = $bottom; $i >= $top; $i--) {
            $matrix[$i][$left] = $num++;
        }
        $left++;
    }

    return $matrix;
}

/**
 * Test Case 1
 */

$n = 3;
$output = generateMatrix($n);

echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[1,2,3],[8,9,4],[7,6,5]]\n\n";

// /**
//  * Test Case 2
//  */

$n = 1;
$output = generateMatrix($n);

echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: [[1]]\n\n";

