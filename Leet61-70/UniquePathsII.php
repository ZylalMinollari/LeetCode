<?php

/**
 * Problem NO.63
 *
 * @param integer[][] $obstacleGrid
 * @return integer
 */

function uniquePathsWithObstacles($obstacleGrid)
{
    $dp = [];
    for ($i = 0; $i < count($obstacleGrid); $i++) {
        $dp[$i] = [];
        for ($j = 0; $j < count($obstacleGrid[$i]); $j++) {
            if ($obstacleGrid[$i][$j] == 1) {
                $dp[$i][$j] = 0;
            } elseif ($i == 0 && $j == 0) {
                $dp[$i][$j] = $obstacleGrid[$i][$j] == 1 ? 0 : 1;
            } elseif ($i == 0) {
                $dp[$i][$j] = $dp[$i][$j - 1];
            } elseif ($j == 0) {
                $dp[$i][$j] = $dp[$i - 1][$j];
            } else {
                $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
            }
        }
    }
    return $dp[$i - 1][$j - 1];
}

/**
 * Test Case 1
 */

$obstacleGrid = [
    [0, 0, 0],
    [0, 1, 0],
    [0, 0, 0]
];
$output = uniquePathsWithObstacles($obstacleGrid);

echo "Case 1:\n";
echo "Input: obstacleGrid = \n";
print_r($obstacleGrid);
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$obstacleGrid = [
    [0, 1],
    [0, 0]
];
$output = uniquePathsWithObstacles($obstacleGrid);

echo "Case 2:\n";
echo "Input: obstacleGrid =\n";
print_r($obstacleGrid);
echo "Output: $output\n";
echo "Expected: 1\n\n";
