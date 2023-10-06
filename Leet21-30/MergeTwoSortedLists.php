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
 * Problem NO.21
 *
 * @param ListNode $list1
 * @param ListNode$list2
 * @return ListNode
 */

function mergeTwoLists($list1, $list2)
{
    $dummy = new ListNode(0);
    $current = $dummy;

    while ($list1 != null && $list2 != null) {
        if ($list1->val <= $list2->val) {
            $current->next = $list1;
            $list1 = $list1->next;
        } else {
            $current->next = $list2;
            $list2 = $list2->next;

        }
        $current = $current->next;
    }
    if ($list1 != null) {
        $current->next = $list1;
    } elseif ($list2 != null) {
        $current->next = $list2;
    }
    return $dummy->next;
}

/**
 * Test Case 1
 */

$list1 = new ListNode(1);
$list1->next = new ListNode(2);
$list1->next->next = new ListNode(4);
$list2 = new ListNode(1);
$list2->next = new ListNode(3);
$list2->next->next = new ListNode(4);
$output = mergeTwoLists($list1, $list2);
echo "Case 1:\n";
echo "Input: list1 = ";
print_r($list1);
echo "     list2 = ";
print_r($list2);
echo "Output: \n";
print_r($output);
echo "Expected: [1,1,2,3,4,4]\n\n";

/**
 * Test Case 2
 */

$list1 = new ListNode();
$list2 = new ListNode();
$output = mergeTwoLists($list1, $list2);
echo "Case 2:\n";
echo "Input: list1 = ";
print_r($list1);
echo "     list2 = ";
print_r($list2);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */
$list1 = new ListNode();
$list2 = new ListNode(0);
$output = mergeTwoLists($list1, $list2);
echo "Case 3:\n";
echo "Input: list1 = ";
print_r($list1);
echo "     list2 = ";
print_r($list2);
echo "Output: \n";
print_r($output);
echo "Expected: [0]\n\n";
