<?php

/**
 * Problem NO.64
 *
 * @param integer[][] $grid
 * @return void
 */

function minPathSum($grid)
{
    $dp = [];

    for ($i = 0; $i < count($grid); $i++) {
        $dp[$i] = [];
        for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($i == 0  && $j == 0) {
                $dp[$i][$j] = $grid[$i][$j];
            } elseif ($i == 0) {
                $dp[$i][$j] = $dp[$i][$j - 1] + $grid[$i][$j];
            } elseif ($j == 0) {
                $dp[$i][$j] = $dp[$i - 1][$j] + $grid[$i][$j];
            } else {
                $min = $dp[$i - 1][$j] < $dp[$i][$j - 1] ?
                    $dp[$i - 1][$j] : $dp[$i][$j - 1];

                $dp[$i][$j] = $min + $grid[$i][$j];
            }
        }
    }

    return $dp[$i - 1][$j - 1];
}

/**
 * Test Case 1
 */

$grid = [
    [1, 3, 1],
    [1, 5, 1],
    [4, 2, 1]
];
$output = minPathSum($grid);

echo "Case 1:\n";
echo "Input: grid = \n";
print_r($grid);
echo "Output: $output\n";
echo "Expected: 7\n\n";

/**
 * Test Case 2
 */

$grid = [
    [1, 2, 3],
    [4, 5, 6]
];
$output = minPathSum($grid);

echo "Case 2:\n";
echo "Input: grid =\n";
print_r($grid);
echo "Output: $output\n";
echo "Expected: 12\n\n";