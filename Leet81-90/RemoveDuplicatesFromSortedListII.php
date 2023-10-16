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
 * Problem NO.82
 *
 * @param ListNode $head
 * @return ListNode
 */

function deleteDuplicates($head)
{
    if ($head == null || $head->next == null) {
        return $head;
    }

    $current = new ListNode();
    $current->next = $head;
    $prev = $current;

    while ($head != null && $head->next != null) {
        if ($head->val == $head->next->val) {
            $duplicate = $head->val;

            while ($head != null && $head->val == $duplicate) {
                $head = $head->next;
            }

            $prev->next = $head;
        } else {
            $prev = $head;
            $head = $head->next;
        }
    }

    return $current->next;
}


/**
 * Test Case 1
 */

$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(3);
$head->next->next->next->next = new ListNode(4);
$head->next->next->next->next->next = new ListNode(4);
$head->next->next->next->next->next->next = new ListNode(5);

echo "Case 1:\n";
echo "Input: head = \n";
print_r($head);
echo "Output: \n";
$output = deleteDuplicates($head);
print_r($output);
echo "Expected: [1,2,5]\n\n";

/**
 * Test Case 2
 */

$head = new ListNode(1);
$head->next = new ListNode(1);
$head->next->next = new ListNode(1);
$head->next->next->next = new ListNode(2);
$head->next->next->next->next = new ListNode(3);

$output = deleteDuplicates($head);
echo "Case 2:\n";
echo "Input: head = \n";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: [2,3]\n\n";
