<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

/**
 * Problem NO.61
 *
 * @param ListNode $head
 * @param integer $k
 * @return ListNode
 */

function rotateRight($head, $k)
{
    if ($head == null || $k == 0) {
        return $head;
    }

    $length_of_list = 1;
    $tail = $head;

    while ($tail->next != null) {
        $tail = $tail->next;
        $length_of_list++;
    }

    $k = $k % $length_of_list;

    if ($k == 0) {
        return $head;
    }

    $step_new_head = $length_of_list - $k;

    $tail->next = $head;

    for ($i = 0; $i < $step_new_head; $i++) {
        $tail = $tail->next;
    }

    $new_head = $tail->next;
    $tail->next = null;


    $current = $new_head;

    while ($current->next != null) {
        $current = $current->next;
    }
    $current->next = $head;
    $tail->next = null;

    return $new_head;
}

/**
 * Test Case 1
 */

$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(4);
$head->next->next->next->next = new ListNode(5);
$k = 2;
$output = rotateRight($head, $k);

echo "Case 1:\n";
echo "Input: head = \n";
print_r($head);
echo "k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [4,5,1,2,3]\n\n";

/**
 * Test Case 2
 */

$head = new ListNode(0);
$head->next = new ListNode(1);
$head->next->next = new ListNode(2);
$k = 4;
$output = rotateRight($head, $k);

echo "Case 2:\n";
echo "Input: head = \n";
print_r($head);
echo "k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [2,0,1]\n\n";
