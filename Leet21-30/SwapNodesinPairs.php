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
 * Problem NO.24
 *
 * @param ListNode $head
 * @return ListNode
 */
function swapPairs($head)
{
    $dummy = new ListNode(0);
    $dummy->next = $head;
    $prev = $dummy;

    while ($head !== null && $head->next !== null) {
        $first = $head;
        $second = $head->next;

        $first->next = $second->next;
        $second->next = $first;
        $prev->next = $second;

        $prev = $first;
        $head = $first->next;
    }

    return $dummy->next;
}

/**
 * Test Case 1
 */

$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(4);
$output = swapPairs($head);
echo "Case 1:\n";
echo "Input: head = ";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: [2,1,4,3]\n\n";

/**
 * Test Case 2
 */
$head = new ListNode();
$output = swapPairs($head);
echo "Case 2:\n";
echo "Input: head = ";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */
$head = new ListNode(1);
$output = swapPairs($head);
echo "Case :\n";
echo "Input: head = ";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: [1]\n\n";
