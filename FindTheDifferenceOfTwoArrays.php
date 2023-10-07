<?php

/**
 * Problem NO.2215
 *
 * @param int[] $nums1
 * @param int[] $nums2
 * @return int[]
 */
function findDifference($nums1, $nums2)
{
    $answer_0 = array_unique(array_diff($nums1, $nums2));
    $answer_1 = array_unique(array_diff($nums2, $nums1));
    $answer = [$answer_0, $answer_1];
    return $answer;
}

/**
 * Test Case 1
 */

$nums1 = [1, 2, 3];
$nums2 = [2, 4, 6];
$output = findDifference($nums1, $nums2);
echo "Case 1:\n";
echo "Input: nums1 = ";
print_r($nums1);
echo "       nums2 = ";
print_r($nums2);
echo "Output: \n";
print_r($output);
echo "Expected: [[1,3],[4,6]]\n\n";

/**
 * Test Case 2
 */

$nums1 = [1, 2, 3, 3];
$nums2 = [1, 1, 2, 2];
$output = findDifference($nums1, $nums2);
echo "Case 2:\n";
echo "Input: nums1 = ";
print_r($nums1);
echo "       nums2 = ";
print_r($nums2);
echo "Output: ";
print_r($output);
echo "Expected: [[3],[]]\n\n";
