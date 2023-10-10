<?php

/**
 * Problem NO.57
 *
 * @param integer[][] $intervals
 * @param integer[] $newInterval
 * @return integer[][]
 */

function insert($intervals,$newInterval)
{
    $intervals[] = $newInterval;

    sort($intervals);
    
    $merge_intervals = [];

    foreach($intervals as $interval) {
        if(empty($merge_intervals) || $interval[0] > $merge_intervals[count($merge_intervals)-1][1]) {
            $merge_intervals[] = $interval;
        }
        else {
            $merge_intervals[count($merge_intervals)-1][1] = max($merge_intervals[count($merge_intervals)-1][1],$interval[1]);
        }
    }

    return $merge_intervals;
}

/**
 * Test Case 1
 */

$intervals = [[1,3],[6,9]];
$newInterval = [2,5];
$output = insert($intervals,$newInterval);

echo "Case 1:\n";
echo "Input: intervals = \n";
print_r($intervals);
echo "newInterval = \n";
print_r($newInterval);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,5],[6,9]]\n\n";

/**
 * Test Case 2
 */

$intervals = [[1,2],[3,5],[6,7],[8,10],[12,16]];
$newInterval = [4,8];
$output = insert($intervals,$newInterval);

echo "Case 2:\n";
echo "Input: intervals = \n";
print_r($intervals);
echo "newInterval = \n";
print_r($newInterval);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,2],[3,10],[12,16]]\n\n";
