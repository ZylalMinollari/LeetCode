<?php

/**
 * Problem NO.84
 *
 * @param integer[] $heights
 * @return integer
 */

function largestRectangleArea($heights)
{
    $stack = [];
    $max_area = 0;

    for ($i = 0; $i < count($heights); $i++) {
        while (!empty($stack) && $heights[$i] < $heights[end($stack)]) {
            $stack_top_index = array_pop($stack);
            $height = $heights[$stack_top_index]; 
            $width = empty($stack) ? $i : $i - end($stack) - 1; 
            $area = $height * $width;
            $max_area = max($area, $max_area);
        }
        array_push($stack, $i);
    }

    while (!empty($stack)) {
        $stack_top_index = array_pop($stack);
        $height = $heights[$stack_top_index];
        $width = empty($stack) ? count($heights) : count($heights) - end($stack) - 1;
        $area = $height * $width;
        $max_area = max($area, $max_area);
    }

    return $max_area;
}

/**
 * Test Case 1
 */
$heights = [2, 1, 5, 6, 2, 3];
$output = largestRectangleArea($heights);
echo "Case 1:\n";
echo "Input: heights = \n";
print_r($heights);
echo "Output: $output\n";
echo "Expected: 10\n\n";

/**
 * Test Case 2
 */

$heights = [2, 4];
$output = largestRectangleArea($heights);
echo "Case 2:\n";
echo "Input: heights = \n";
print_r($heights);
echo "Output: $output\n";
echo "Expected: 4\n\n";

/**
 * Test Case Special
 */

 $heights = [2,1,2];
 $output = largestRectangleArea($heights);
 echo "Case 2:\n";
 echo "Input: heights = \n";
 print_r($heights);
 echo "Output: $output\n";
 echo "Expected: 3\n\n";