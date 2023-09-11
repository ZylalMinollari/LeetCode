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
 * Problem NO.83
 *
 * @param ListNode $head
 * @return ListNode
 */

function deleteDuplicates($head)
{
    if ($head == null || $head->next == null) {
        return $head;
    }

    $current = $head;

    while ($current !== null && $current->next !== null) {
        if ($current->val == $current->next->val) {
            $current->next = $current->next->next;
        } else {
            $current = $current->next;
        }
    }

    return $head;
}

/**
 * Test Case 1
 */
$list1 = new ListNode(1);
$list1->next = new ListNode(1);
$list1->next->next = new ListNode(2);

$head = [1,1,2];
$output = deleteDuplicates($list1);
echo "Case 1:\n";
echo "Input: head = \n";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: [1,2]\n\n";

/**
 * Test Case 2
 */

$list2 = new ListNode(1);
$list2->next = new ListNode(1);
$list2->next->next = new ListNode(2);
$list2->next->next->next = new ListNode(3);
$list2->next->next->next->next = new ListNode(3);
 
$head = [1,1,2,3,3];
$output = deleteDuplicates($list2);
echo "Case 2:\n";
echo "Input: head = \n";
print_r($head);
echo "Output: \n";
print_r($output);
echo "Expected: [1,2,3]\n\n";
