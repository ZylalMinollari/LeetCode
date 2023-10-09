<?php
/**
 * Problem NO.50
 *
 * @param float $x
 * @param integer $n
 * @return float
 */

/**
 * This solution is not accepted by LeetCode
 */

function myPow(float $x, int $n)
{
    $result = 1;
    if($n == 0) {
        return $result;
    }
    $isNegative = false;
    if($n < 0) {
        $n = -$n;
        $isNegative = true;
    }
    
    while($n != 0) {
        if($n % 2 != 0) {
            $result *=  $x;
        }
        $x *= $x;
        $n = $n / 2;
    }
    return  $isNegative == false  ? $result : 1/$result;
}



/**
 * Test Case 1
 */

$x = 2.00000;
$n = 10;
$output = myPow($x, $n);
echo "Case 1:\n";
echo "Input: x = $x, n = $n\n";
echo "Output: $output\n";
echo "Expected: 1024.00000\n\n";

/**
 * Test Case 2
 */

$x = 2.10000;
$n = 3;
$output = myPow($x, $n);
echo "Case 2:\n";
echo "Input: x = $x, n = $n\n";
echo "Output: $output\n";
echo "Expected: 9.26100\n\n";

/**
 * Test Case 3
 */

$x = 2.00000;
$n = -2;
$output = myPow($x, $n);
echo "Case 3:\n";
echo "Input: x = $x, n = $n\n";
echo "Output: $output\n";
echo "Expected: 0.25000\n\n";

/**
 * Special Case
 */

 $x = 1.0000000000001;
 $n = -2147483648;
 $output = myPow($x, $n);
 echo "Case 3:\n";
 echo "Input: x = $x, n = $n\n";
 echo "Output: $output\n";
 echo "Expected: 0.99979\n\n";
