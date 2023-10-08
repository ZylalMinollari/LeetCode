<?php
class Solution
{
    /**
     * Problem NO.37
     *
     * @param string[][] $board
     * @return bool
     */
    public function solveSudoku(&$board)
    {
        if (isSolved($board)) {
            return true;
        }

        $emptyCell = findEmptyCell($board);
        $row = $emptyCell[0];
        $col = $emptyCell[1];

        for ($num = 1; $num <= 9; $num++) {
            if (isValid($board, $row, $col, $num)) {
                $board[$row][$col] = (string) $num;
                if ($this->solveSudoku($board)) {
                    return true;
                }
                $board[$row][$col] = '.';
            }
        }
        return false;
    }
}

function isSolved($board)
{
    foreach ($board as $row) {
        if (in_array('.', $row)) {
            return false;
        }
    }
    return true;
}

function findEmptyCell($board)
{
    for ($row = 0; $row < 9; $row++) {
        for ($col = 0; $col < 9; $col++) {
            if ($board[$row][$col] === '.') {
                return [$row, $col];
            }
        }
    }

    return null;
}

function isValid($board, $row, $col, $num)
{
    for ($i = 0; $i < 9; $i++) {
        if ($board[$row][$i] == $num) {
            return false;
        }
    }

    for ($i = 0; $i < 9; $i++) {
        if ($board[$i][$col] == $num) {
            return false;
        }
    }

    $startRow = floor($row / 3) * 3;
    $endCol = floor($col / 3) * 3;

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$startRow + $i][$endCol + $j] == $num) {
                return false;
            }
        }
    }

    return true;
}

function displayBoard($board)
{
    for ($row = 0; $row < 9; $row++) {
        for ($col = 0; $col < 9; $col++) {
            echo $board[$row][$col] . ' ';
            if (($col + 1) % 3 == 0 && $col < 8) {
                echo '|';
            }
        }
        echo "\n";
        if (($row + 1) % 3 == 0 && $row < 8) {
            echo "-------------------\n";
        }
    }
}

/**
 * Test Case 1
 */

$board = [["5", "3", ".", ".", "7", ".", ".", ".", "."],
    ["6", ".", ".", "1", "9", "5", ".", ".", "."],
    [".", "9", "8", ".", ".", ".", ".", "6", "."],
    ["8", ".", ".", ".", "6", ".", ".", ".", "3"],
    ["4", ".", ".", "8", ".", "3", ".", ".", "1"],
    ["7", ".", ".", ".", "2", ".", ".", ".", "6"],
    [".", "6", ".", ".", ".", ".", "2", "8", "."],
    [".", ".", ".", "4", "1", "9", ".", ".", "5"],
    [".", ".", ".", ".", "8", ".", ".", "7", "9"]];

$solution = new Solution();
echo "Case 1:\n";
echo "Input: board =\n\n";
displayBoard($board);
if ($solution->solveSudoku($board)) {
    echo "\nSolved Sudoku Puzzle:\n\n";
    displayBoard($board);
} else {
    echo "\nNo solution found for the Sudoku puzzle.\n\n";
}
echo "\nExpected: \n
5 3 4 |6 7 8 |9 1 2
6 7 2 |1 9 5 |3 4 8
1 9 8 |3 4 2 |5 6 7
--------------------
8 5 9 |7 6 1 |4 2 3
4 2 6 |8 5 3 |7 9 1
7 1 3 |9 2 4 |8 5 6
--------------------
9 6 1 |5 3 7 |2 8 4
2 8 7 |4 1 9 |6 3 5
3 4 5 |2 8 6 |1 7 9  \n\n";
