<?php

/**
 * Definition for a singly-linked list.
 */
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
 * Problem NO.2
 *
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2)
{
    $dummy = new ListNode(0);
    $current = $dummy;
    $carry = 0;

    while ($l1 !== null || $l2 !== null) {
        $x = ($l1 !== null) ? $l1->val : 0;
        $y = ($l2 !== null) ? $l2->val : 0;

        $sum = $x + $y + $carry;
        $carry = (int) ($sum / 10);
        $current->next = new ListNode($sum % 10);
        $current = $current->next;

        if ($l1 !== null) {
            $l1 = $l1->next;
        }

        if ($l2 !== null) {
            $l2 = $l2->next;
        }
    }

    if ($carry > 0) {
        $current->next = new ListNode($carry);
    }

    return $dummy->next;
}

/**
 * Test Case 1
 */

$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);
$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);
$output = addTwoNumbers($l1, $l2);
echo "Case 1:\n";
echo "Input: l1 = ";
print_r($l1);
echo "     l2 = ";
print_r($l2);
echo "Output: \n";
print_r($output);
echo "Expected: [7,0,8]\n\n";

/**
 * Test Case 2
 */

$l1 = new ListNode(0);
$l2 = new ListNode(0);
$output = addTwoNumbers($l1, $l2);
echo "Case 2:\n";
echo "Input: l1 = ";
print_r($l1);
echo "     l2 = ";
print_r($l2);
echo "Output: \n";
print_r($output);
echo "Expected: [0]\n\n";

/**
 * Test Case 3
 */
$l1 = new ListNode(9);
$l1->next = new ListNode(9);
$l1->next->next = new ListNode(9);
$l1->next->next->next = new ListNode(9);
$l1->next->next->next->next = new ListNode(9);
$l1->next->next->next->next->next = new ListNode(9);
$l1->next->next->next->next->next->next = new ListNode(9);
$l2 = new ListNode(9);
$l2->next = new ListNode(9);
$l2->next->next = new ListNode(9);
$l2->next->next->next = new ListNode(9);
$output = addTwoNumbers($l1, $l2);
echo "Case 3:\n";
echo "Input: l1 = ";
print_r($l1);
echo "     l2 = ";
print_r($l2);
echo "Output: \n";
print_r($output);
echo "Expected: [8,9,9,9,0,0,0,1]\n\n";
