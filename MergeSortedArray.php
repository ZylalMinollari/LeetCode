<?php

/**
 * Problem NO.88
 *
 * @param integer[] $nums1
 * @param integer $m
 * @param integer[] $nums2
 * @param integer $n
 * @return void
 */

function merge(&$nums1, $m, $nums2, $n)
{
    $p1 = $m - 1;
    $p2 = $n - 1;
    $p = $m + $n - 1;
    while ($p1 >= 0 && $p2 >= 0) {
        if ($nums1[$p1] > $nums2[$p2]) {
            $nums1[$p] = $nums1[$p1];
            $p1--;
        } else {
            $nums1[$p] = $nums2[$p2];
            $p2--;
        }
        $p--;
    }
    while ($p2 >= 0) {
        $nums1[$p] = $nums2[$p2];
        $p--;
        $p2--;
    }
    sort($nums1);
}

/**
 * Test Case 1
 */

$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;
echo "Case 1:\n";
echo "Input: nums1 = \n";
print_r($nums1);
echo "   m = $m\n";
echo "   nums2 = \n";
print_r($nums2);
echo "   n = $n\n";
echo "Output: \n";
merge($nums1, $m, $nums2, $n);
print_r($nums1);
echo "Expected: [1,2,2,3,5,6]\n\n";

/**
 * Test Case 2
 */

$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
echo "Case 2:\n";
echo "Input: nums1 = \n";
print_r($nums1);
echo "   m = $m\n";
echo "   nums2 = \n";
print_r($nums2);
echo "   n = $n\n";
echo "Output: \n";
merge($nums1, $m, $nums2, $n);
print_r($nums1);
echo "Expected: [1]\n\n";

/**
 * Test Case 3
 */

$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
echo "Case 3:\n";
echo "Input: nums1 = \n";
print_r($nums1);
echo "   m = $m\n";
echo "   nums2 = \n";
print_r($nums2);
echo "   n = $n\n";
echo "Output: \n";
merge($nums1, $m, $nums2, $n);
print_r($nums1);
echo "Expected: [1]\n\n";
