<?php

/**
 * Problem NO.54
 *
 * @param integer[][] $matrix
 * @return integer[]
 */

function spiralOrder($matrix)
{
    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;
    $direction = "right";
    $result = [];

    while ($top <= $bottom && $left <= $right) {
        if ($direction == "right") {
            for ($i = $left; $i <= $right; $i++) {
                $result[] = $matrix[$top][$i];
            }
            $top++;
        }

        if ($direction == "down") {
            for ($i = $top; $i <= $bottom; $i++) {
                $result[] = $matrix[$i][$right];
            }
            $right--;
        }

        if ($direction == "left") {
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$bottom][$i];

            }
            $bottom--;
        }
        if ($direction == "up") {
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$left];
            }
            $left++;
        }

        $direction = ($direction == "right") ? "down" : (($direction == "down") ? "left"
            : (($direction == "left") ? "up" : "right"));
    }

    return $result;

}

/**
 * Test Case 1
 */

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$output = spiralOrder($matrix);

echo "Case 1:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo "Output: \n";
print_r($output);
echo "Expected: [1,2,3,6,9,8,7,4,5]\n\n";

/**
 * Test Case 2
 */

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
];

$output = spiralOrder($matrix);

echo "Case 2:\n";
echo "Input: matrix = \n";
print_r($matrix);
echo "Output: \n";
print_r($output);
echo "Expected: [1,2,3,4,8,12,11,10,9,5,6,7]\n\n";
