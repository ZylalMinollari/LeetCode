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
 * Problem NO.23
 *
 * @param ListNode[] $lists
 * @return ListNode
 */

function mergeKLists($lists)
{
    $numLists = count($lists);

    if ($numLists === 0) {
        return null;
    }
    while ($numLists > 1) {
        $mid = intval($numLists / 2);
        for ($i = 0; $i < $mid; $i++) {
            $lists[$i] = mergeTwoLists($lists[$i], $lists[$numLists - $i - 1]);
        }
        $numLists = intval(($numLists + 1) / 2);
    }
    return $lists[0];
}

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
$list1->next = new ListNode(4);
$list1->next->next = new ListNode(5);

$list2 = new ListNode(1);
$list2->next = new ListNode(3);
$list2->next->next = new ListNode(4);

$list3 = new ListNode(2);
$list3 = new ListNode(6);

$lists = [$list1, $list2, $list3];
$output = mergeKLists($lists);
echo "Case 1:\n";
echo "Input: lists = ";
print_r($lists);
echo "Output: \n";
print_r($output);
echo "Expected: [1,1,2,3,4,4,5,6]\n\n";

/**
 * Test Case 2
 */
$lists = [];
$output = mergeKLists($lists);
echo "Case 2:\n";
echo "Input: lists = ";
print_r($lists);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";

/**
 * Test Case 3
 */
$lists = [[]];
$output = mergeKLists($lists);
echo "Case :\n";
echo "Input: lists = ";
print_r($lists);
echo "Output: \n";
print_r($output);
echo "Expected: []\n\n";
