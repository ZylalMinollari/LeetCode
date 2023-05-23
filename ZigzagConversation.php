<?php

/**
 * Problem NO.6
 *
 * @param string $s
 * @param int $numRows
 * @return string
 */

function convert($s, $numRows)
{
    if ($numRows == 1 || strlen($s) <= $numRows) {
        return $s;
    }

    $result = '';
    $cycleLength = 2 * $numRows - 2;
    $n = strlen($s);

    for ($i = 0; $i < $numRows; $i++) {
        for ($j = 0; $j + $i < $n; $j += $cycleLength) {
            $result .= $s[$j + $i];

            if ($i != 0 && $i != $numRows - 1 && $j + $cycleLength - $i < $n) {
                $result .= $s[$j + $cycleLength - $i];
            }
        }
    }

    return $result;

}

/**
 * Test Case 1
 */

$s = "PAYPALISHIRING";
$numRows = 3;
$output = convert($s, $numRows);
echo "Case 1:\n";
echo "Input: s = $s   numRows = $numRows\n";
echo "Output: $output\n";
echo "Expected: PAHNAPLSIIGYIR\n\n";

/**
 * Test Case 2
 */

$s = "PAYPALISHIRING";
$numRows = 4;
$output = convert($s, $numRows);
echo "Case 2:\n";
echo "Input: s = $s   numRows = $numRows\n";
echo "Output: $output\n";
echo "Expected: PINALSIGYAHRPI\n\n";

/**
 * Test Case 3
 */

$s = "A";
$numRows = 1;
$output = convert($s, $numRows);
echo "Case 3:\n";
echo "Input: s = $s   numRows = $numRows\n";
echo "Output: $output\n";
echo "Expected: A\n\n";