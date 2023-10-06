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
 * Problem NO.25
 *
 * @param ListNode $head
 * @param int $k
 * @return ListNode
 */

function reverseKGroup($head, $k)
{
    $dummy = new ListNode(0);
    $dummy->next = $head;
    $prevGroupTail = $dummy;

    while ($head !== null) {
        $count = 0;
        $groupHead = $head;
        $groupTail = $head;

        while ($count < $k && $head !== null) {
            $head = $head->next;
            $count++;

        }
        if ($count < $k) {
            $prevGroupTail->next = $groupHead;
            break;
        }

        $prev = null;
        for ($i = 0; $i < $k; $i++) {
            $next = $groupHead->next;
            $groupHead->next = $prev;
            $prev = $groupHead;
            $groupHead = $next;
        }
        $prevGroupTail->next = $prev;
        $prevGroupTail = $groupTail;
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
$head->next->next->next->next = new ListNode(5);
$k = 2;
$output = reverseKGroup($head, $k);
echo "Case 1:\n";
echo "Input: head = ";
print_r($head);
echo "       k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [2,1,4,3,5]\n\n";

/**
 * Test Case 2
 */
$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(3);
$head->next->next->next = new ListNode(4);
$head->next->next->next->next = new ListNode(5);
$k = 3;
$output = reverseKGroup($head, $k);
echo "Case 2:\n";
echo "Input: head = ";
print_r($head);
echo "       k = $k\n";
echo "Output: \n";
print_r($output);
echo "Expected: [3,2,1,4,5]\n\n";
