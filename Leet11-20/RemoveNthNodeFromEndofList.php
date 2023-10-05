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
 * Problem NO.19
 *
 * @param ListNode $head
 * @param int $n
 * @return ListNode
 */
function removeNthFromEnd($head, $n)
{
    $dummy = new ListNode(0);
    $dummy->next = $head;

    $first = $dummy;
    $second = $dummy;

    for ($i = 0; $i <= $n; $i++) {
        $second = $second->next;
    }

    while ($second != null) {
        $first = $first->next;
        $second = $second->next;
    }

    $first->next = $first->next->next;

    return $dummy->next;
}

/**
 * Function to convert array to LinkedList
 * It is created for testing purpose
 *
 * @param int[] $arr
 * @return ListNode
 */

function arrayToLinkedList($arr)
{
    $head = new ListNode();
    $current = $head;
    foreach ($arr as $val) {
        $node = new ListNode($val);
        $current->next = $node;
        $current = $current->next;
    }

    return $head->next;
}
/**
 * Function to print a LinkedList
 *It is created for testing purpose
 * @param ListNode $head
 * @return void
 */

function printLinkedList($head)
{
    $current = $head;
    while ($current != null) {
        echo $current->val . " ";
        $current = $current->next;
    }
    echo "\n";
}

/**
 * Test Case 1
 */

$arr = [1, 2, 3, 4, 5];
$n = 2;

$head = arrayToLinkedList($arr);

echo "Case 1:\n";
echo "Original linked list: ";
printLinkedList($head);

$head = removeNthFromEnd($head, $n);

echo "Updated linked list after removing the $n-th node from the end: ";
printLinkedList($head);
echo "Expected: [1,2,3,5]\n\n";
echo "\n";

/**
 * Test Case 2
 */

$arr = [1];
$n = 1;

$head = arrayToLinkedList($arr);

echo "Case 2:\n";
echo "Original linked list: ";
printLinkedList($head);

$head = removeNthFromEnd($head, $n);

echo "Updated linked list after removing the $n-th node from the end: ";
printLinkedList($head);
echo "Expected: []\n\n";
echo "\n";

/**
 * Test Case 3
 */

$arr = [1, 2];
$n = 1;

$head = arrayToLinkedList($arr);

echo "Case 3:\n";
echo "Original linked list: ";
printLinkedList($head);

$head = removeNthFromEnd($head, $n);

echo "Updated linked list after removing the $n-th node from the end: ";
printLinkedList($head);
echo "Expected: [1]\n\n";
echo "\n";
