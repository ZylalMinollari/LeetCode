<?php

/**
 * Problem NO.36
 *
 * @param string[][] $board
 * @return boolean
 */

function isValidSudoku($board)
{
    $rows = [];
    $columns = [];
    $boxes = [];

    for ($i = 0; $i < 9; $i++) {
        $rows[$i] = [];
        $columns[$i] = [];
        $boxes[$i] = [];
    }

    for ($row = 0; $row < 9; $row++) {
        for ($column = 0; $column < 9; $column++) {
            $cell = $board[$row][$column];

            if ($cell != '.') {
                if (in_array($cell, $rows[$row]) || in_array($cell, $columns[$column]) || in_array($cell, $boxes[floor($row / 3) * 3 + floor($column / 3)])) {
                    return false;
                }

                $rows[$row][] = $cell;
                $columns[$column][] = $cell;
                $boxes[floor($row / 3) * 3 + floor($column / 3)][] = $cell;
            }

        }
    }
    return true;
}

/**
 * Test Case 1
 */

$board =
    [["5", "3", ".", ".", "7", ".", ".", ".", "."]
    , ["6", ".", ".", "1", "9", "5", ".", ".", "."]
    , [".", "9", "8", ".", ".", ".", ".", "6", "."]
    , ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
    , ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
    , ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
    , [".", "6", ".", ".", ".", ".", "2", "8", "."]
    , [".", ".", ".", "4", "1", "9", ".", ".", "5"]
    , [".", ".", ".", ".", "8", ".", ".", "7", "9"]];

$output = isValidSudoku($board);
echo "Case 1:\n";
echo "Input: board = \n";
print_r($board);
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$board =
    [["8", "3", ".", ".", "7", ".", ".", ".", "."]
    , ["6", ".", ".", "1", "9", "5", ".", ".", "."]
    , [".", "9", "8", ".", ".", ".", ".", "6", "."]
    , ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
    , ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
    , ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
    , [".", "6", ".", ".", ".", ".", "2", "8", "."]
    , [".", ".", ".", "4", "1", "9", ".", ".", "5"]
    , [".", ".", ".", ".", "8", ".", ".", "7", "9"]];
$output = isValidSudoku($board);
echo "Case 1:\n";
echo "Input: board = \n";
print_r($board);
echo "Output: $output\n";
echo "Expected: false\n\n";
