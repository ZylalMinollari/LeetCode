<?php

/**
 * Problem NO.71
 *
 * @param string $path
 * @return string
 */

function simplifyPath($path)
{
    $unixPaths = explode('/', $path);
    $stack = [];

    foreach ($unixPaths as $unixPath) {
        if (empty($unixPath) || $unixPath == '.') {
            continue;
        } elseif ($unixPath == '..') {
            if (!empty($stack)) {
                array_pop($stack);
            }
        } else {
            array_push($stack, $unixPath);
        }

    }

    $canonicalPath = '/' . implode('/', $stack);

    if (empty($canonicalPath)) {
        return '/';
    }

    return $canonicalPath;
}

/**
 * Test Case 1
 */

$path = "/home/";
$output = simplifyPath($path);

echo "Case 1:\n";
echo "Input: path = $path\n";
echo "Output: $output\n";
echo "Expected: '/home'\n\n";

/**
 * Test Case 2
 */

$path = "/../";
$output = simplifyPath($path);

echo "Case 2:\n";
echo "Input: path = $path\n";
echo "Output: $output\n";
echo "Expected: '/'\n\n";

/**
 * Test Case 3
 */

$path = "/home//foo/";
$output = simplifyPath($path);

echo "Case 3:\n";
echo "Input: path = $path\n";
echo "Output: $output\n";
echo "Expected: '/home/foo'\n\n";