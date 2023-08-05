<?php

/**
 * Problem NO.51
 *
 * @param integer $n
 * @return string[][]
 */

function solveNQueens($n)
{
    $solutions = [];
    $chessBoard  = createChessBoard($n);
    solveNQueensRecursive($chessBoard, 0, $solutions);
    return $solutions;
}

function createChessBoard($n)
{
    $board = [];

    for ($i = 0; $i < $n; $i++) {
        $board[$i] = array_fill(0, $n, '.');
    }

    return $board;
}

function isSafe($chessBoard, $row, $col)
{
    for ($i = 0; $i < $row; $i++) {
        if ($chessBoard[$i][$col] == 'Q') {
            return false;
        }
        if ($col - ($row - $i) >= 0 && $chessBoard[$i][$col - ($row - $i)] == 'Q') {
            return false;
        }
        if ($col + ($row - $i) < sizeof($chessBoard) && $chessBoard[$i][$col + ($row - $i)] == 'Q') {
            return false;
        }
    }
    return true;
}

function solveNQueensRecursive($chessBoard, $row, &$solutions)
{
    if ($row == sizeof($chessBoard)) {
        $solutions[] = array_map('implode', $chessBoard);
        return;
    }
    for ($col = 0; $col < sizeof($chessBoard); $col++) {
        if (isSafe($chessBoard, $row, $col)) {
            $chessBoard[$row][$col] = 'Q';
            solveNQueensRecursive($chessBoard, $row + 1, $solutions);
            $chessBoard[$row][$col] = '.';
        }
    }
}


/**
 * Test Case 1
 */

$n = 4;
$output = solveNQueens($n);
echo "Case 1:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: [
    ['.Q..','...Q','Q...','..Q.'],
    ['..Q.','Q...','...Q','.Q..']
    ]\n\n";

/**
 * Test Case 2
 */

$n = 1;
$output = solveNQueens($n);
echo "Case 2:\n";
echo "Input: n = $n\n";
echo "Output: \n";
print_r($output);
echo "Expected: [['Q']]\n\n";
