<?php

/**
 * Solution of Problem NO.79
 *
 * @param string[][] $board
 * @param string $word
 * @return boolean
 */

function exist($board, $word)
{
    $directions = [[0, 1], [0, -1], [1, 0], [-1, 0]];
    for ($i = 0; $i < sizeof($board); $i++) {
        for ($j = 0; $j < sizeof($board[0]); $j++) {
            if (backtrack($i, $j, 0, $directions, $word, $board)) {
                return true;
            }
        }
    }
    return false;
}

function backtrack($row, $col, $index, $directions, $word, &$board)
{
    if ($index >= strlen($word)) {
        return true;
    }

    if (
        $row < 0 || $row >= sizeof($board) || $col < 0 || $col >= sizeof($board[0]) ||
        $board[$row][$col] != $word[$index] || $board[$row][$col] == '*'
    ) {
        return false;
    }

    $temp = $board[$row][$col];
    $board[$row][$col] = '*';

    foreach ($directions as $dir) {
        $newRow = $row + $dir[0];
        $newCol = $col + $dir[1];
        if (backtrack($newRow, $newCol, $index + 1, $directions, $word, $board)) {
            return true;
        }
    }
    $board[$row][$col] = $temp;

    return false;
}

/**
 * Test Case 1
 */

$board = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
$word = 'ABCCED';
$output = exist($board, $word);
echo "Case 1:\n";
echo "Input: board =\n";
print_r($board);
echo " word = $word\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 2
 */

$board = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
$word = 'SEE';
$output = exist($board, $word);
echo "Case 2:\n";
echo "Input: board = \n";
print_r($board);
echo " word = $word\n";
echo "Output: $output\n";
echo "Expected: true\n\n";

/**
 * Test Case 3
 */

$board = [['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']];
$word = 'ABCB';
$output = exist($board, $word);
echo "Case 3:\n";
echo "Input: board = \n";
print_r($board);
echo "word = $word\n";
echo "Output: $output\n";
echo "Expected: false\n\n";
