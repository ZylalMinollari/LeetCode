<?php

/**
 * Problem NO.4
 *
 * @param int[] $nums1
 * @param int[] $nums2
 * @return float
 */

function findMedianSortedArrays($nums1, $nums2)
{

    $arr = array_merge($nums1, $nums2);
    sort($arr);
    $cnt_arr = count($arr);

    if ($cnt_arr % 2) {
        return $arr[$cnt_arr / 2];
    } else {
        return ($arr[intdiv($cnt_arr, 2) - 1] + $arr[intdiv($cnt_arr, 2)]) / 2;
    }

}

/**
 * Test Case 1
 */

$nums1 = [1, 3];
$nums2 = [2];
$output = findMedianSortedArrays($nums1, $nums2);
echo "Case 1:\n";
echo "Input: nums1 = ";
print_r($nums1);
echo "       nums2 = ";
print_r($nums2);
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$nums1 = [1, 2];
$nums2 = [3, 4];
$output = findMedianSortedArrays($nums1, $nums2);
echo "Case 2:\n";
echo "Input: nums1 = ";
print_r($nums1);
echo "       nums2 = ";
print_r($nums2);
echo "Output: $output\n";
echo "Expected: 2.5\n\n";