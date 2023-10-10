<?php

/**
 * Problem NO.52
 *
 * @param integer $n
 * @return integer
 */

function totalNQueens($n)
{
    $count = 0;
    $chessBoard = createChessBoard($n);
    placeQueens(0, $chessBoard, $count, $n);
    return $count;
}

function createChessBoard($n)
{
    $board = [];

    for ($i = 0; $i < $n; $i++) {
        $board[$i] = array_fill(0, $n, 0);
    }

    return $board;
}

function placeQueens($row, $chessBoard, &$count, $n)
{
    if ($row == $n) {
        $count = $count + 1;
        return;
    }

    for ($col = 0; $col <= $n - 1; $col++) {
        if (isValidPlacement($row, $col, $chessBoard)) {
            $chessBoard[$row][$col] = 1;
            placeQueens($row + 1, $chessBoard, $count, $n);
            $chessBoard[$row][$col] = 0;
        }
    }
}

function isValidPlacement($row, $col, $chessBoard)
{
    for ($i = 0; $i <= $row - 1; $i++) {
        if ($chessBoard[$i][$col] == 1) {
            return false;
        }
        if ($col - ($row - $i) >= 0 && $chessBoard[$i][$col - ($row - $i)] == 1) {
            return false;
        }
        if ($col + ($row - $i) < sizeof($chessBoard) && $chessBoard[$i][$col + ($row - $i)]) {
            return false;
        }
    }

    return true;
}

/**
 * Test Case 1
 */

$n = 4;
$output = totalNQueens($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: 2\n\n";

/**
 * Test Case 2
 */

$n = 1;
$output = totalNQueens($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: $output\n";
echo "Expected: 1\n\n";
