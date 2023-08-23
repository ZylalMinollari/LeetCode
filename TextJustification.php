<?php

/**
 * Problem NO.68
 *
 * @param string[] $words
 * @param integer $maxWidth
 * @return string[]
 */

function fullJustify($words, $maxWidth)
{
    $output = [];
    $current_line = [];
    $line_length = 0;

    foreach ($words as $word) {

        if ($line_length + count($current_line) + strlen($word) > $maxWidth) {

            $num_spaces = $maxWidth - $line_length;
            $num_words = count($current_line);

            if ($num_words == 1) {
                $output[] = $current_line[0] . str_repeat(' ', $num_spaces);
            } else {
                $base_space = floor($num_spaces / ($num_words - 1));
                $extra_space = $num_spaces % ($num_words - 1);

                $formatted_line = '';
                for ($i = 0; $i < $num_words - 1; $i++) {
                    $formatted_line .= $current_line[$i];
                    $formatted_line .= str_repeat(' ', $base_space);
                    if ($extra_space > 0) {
                        $formatted_line .= ' ';
                        $extra_space--;
                    }
                }

                $formatted_line .= $current_line[$num_words - 1];
                $output[] = $formatted_line;
            }

            $current_line = [];
            $line_length = 0;
        }

        $current_line[] = $word;
        $line_length += strlen($word);
    }

    $last_line = implode(' ', $current_line);
    $last_line .= str_repeat(' ', $maxWidth - strlen($last_line));
    $output[] = $last_line;


    return $output;
}

/**
 * Test Case 1
 */

$words = ["This", "is", "an", "example", "of", "text", "justification."];
$maxWidth = 16;
$output = fullJustify($words, $maxWidth);
echo "Case 1:\n";
echo "Input: words = \n";
print_r($words);
echo "   maxWidth = $maxWidth\n";
echo "Output: \n";
print_r($output);
echo "Expected: 
[
    'This    is    an',
    'example  of text',
    'justification.  '
]\n\n";

/**
 * Test Case 2
 */

$words = ["What", "must", "be", "acknowledgment", "shall", "be"];
$maxWidth = 16;
$output = fullJustify($words, $maxWidth);
echo "Case 2:\n";
echo "Input: words = \n";
print_r($words);
echo "   maxWidth = $maxWidth\n";
echo "Output: \n";
print_r($output);
echo "Expected:
[
    'What   must   be',
    'acknowledgment  ',
    'shall be        '
]\n\n";

/**
 * Test Case 3
 */

$words = ["Science", "is", "what", "we", "understand", "well", "enough", "to", "explain", "to", "a", "computer.", "Art", "is", "everything", "else", "we", "do"];
$maxWidth = 20;
$output = fullJustify($words, $maxWidth);
echo "Case 3:\n";
echo "Input: words = \n";
print_r($words);
echo "   maxWidth = $maxWidth\n";
echo "Output: \n";
print_r($output);
echo "Expected: 
[
    'Science  is  what we',
    'understand      well',
    'enough to explain to',
    'a  computer.  Art is',
    'everything  else  we',
    'do                  '
]\n\n";
