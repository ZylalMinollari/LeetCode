<?php

/**
 * Problem NO.56
 *
 * @param integer[][] $intervals
 * @return integer[][]
 */

function merge($intervals)
{
    sort($intervals);

    $merge_intervals = [];

    foreach ($intervals as $interval) {
        if (empty($merge_intervals) || $interval[0] > $merge_intervals[count($merge_intervals) - 1][1]) {
            $merge_intervals[] = $interval;
        } else {
            $merge_intervals[count($merge_intervals) - 1][1] = max($merge_intervals[count($merge_intervals) - 1][1], $interval[1]);
        }
    }

    return $merge_intervals;
}

/**
 * Test Case 1
 */

$intervals = [[1, 3], [2, 6], [8, 10], [15, 18]];

$output = merge($intervals);

echo "Case 1:\n";
echo "Input: intervals = \n";
print_r($intervals);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,6],[8,10],[15,18]]\n\n";

/**
 * Test Case 2
 */

$intervals = [[1, 4], [4, 5]];

$output = merge($intervals);

echo "Case 2:\n";
echo "Input: intervals = \n";
print_r($intervals);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,5]]\n\n";
