<?php

class ListNode
{
    public $val;
    public $next;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

/**
 * Problem NO.86
 * @param ListNode $head
 * @param integer $x
 * @return ListNode
 */

function partition($head, $x)
{
    $before_head = new ListNode();
    $before = $before_head;

    $after_head = new ListNode();
    $after = $after_head;


    while ($head != null) {
        if ($head->val < $x) {
            $before->next = $head;
            $before = $before->next;
        }
        if ($head->val >= $x) {
            $after->next = $head;
            $after = $after->next;
        }

        $head = $head->next;
    }
    $after->next = null;
    $before->next = $after_head->next;
    return $before_head->next;
}

/**
 * Test Case 1
 */

$head = new ListNode(1);
$head->next = new ListNode(4);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(2);
$head->next->next->next->next = new ListNode(5);
$head->next->next->next->next->next = new ListNode(2);
$x = 3;
echo "Case 1:\n";
echo "Input: head = \n";
print_r($head);
echo "   x = $x\n";
echo "Output: \n";
$output = partition($head, $x);
print_r($output);
echo "Expected: [1,2,2,4,3,5]\n\n";

/**
 * Test Case 2
 */

$head = new ListNode(2);
$head->next = new ListNode(1);
$x = 2;
echo "Case 2:\n";
echo "Input: n = \n";
print_r($head);
echo "    x = $x\n";
echo "Output: \n";
$output = partition($head, $x);
print_r($output);
echo "Expected: [1,2]\n\n";
