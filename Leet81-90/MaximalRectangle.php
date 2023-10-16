<?php

/**
 * Problem NO.85
 *
 * @param integer[][] $matrix
 * @return integer
 */

function maximalRectangle($matrix)
{
    if (empty($matrix)) {
        return 0;
    }

    $rows = sizeof($matrix);
    $cols = sizeof($matrix[0]);
    $max_area = 0;
    $heights = array_fill(0, $cols, 0);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $heights[$j] = ($matrix[$i][$j] == '1') ? $heights[$j] + 1 : 0;
        }
        $stack = [];
        for ($j = 0; $j <= $cols; $j++) {
            while (!empty($stack) && ($j == $cols || $heights[$j] < $heights[end($stack)])) {
                $height = $heights[array_pop($stack)];
                $width = empty($stack) ? $j : $j - end($stack) - 1;
                $max_area = max($max_area, $height * $width);
            }
            array_push($stack, $j);
        }
    }
    return $max_area;
}

/**
 * Test Case 1
 */
$matrix = [["1", "0", "1", "0", "0"], ["1", "0", "1", "1", "1"], ["1", "1", "1", "1", "1"], ["1", "0", "0", "1", "0"]];
$output = maximalRectangle($matrix);
echo "Case 1:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo "Output: $output\n";
echo "Expected: 6\n\n";

/**
 * Test Case 2
 */

$matrix = [["0"]];
$output = maximalRectangle($matrix);
echo "Case 2:\n";
echo "Input: heights = \n";
print_r($matrix);
echo "Output: $output\n";
echo "Expected: 0\n\n";

/**
 * Test Case 3
 */

$matrix = [["1"]];
$output = maximalRectangle($matrix);
echo "Case 3:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo "Output: $output\n";
echo "Expected: 1\n\n";
