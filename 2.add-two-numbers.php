/*
 * @lc app=leetcode id=2 lang=php
 *
 * [2] Add Two Numbers
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        return $this->reverseList($this->getNode($l1, $l2));
    }

    function reverseList($list) {
        $prev = null;
        while($list !== null) {
            $node = new ListNode($list->val, null);
            $node->next = $prev;

            $prev = $node;
            $list = $list->next;
        }

        return $node;
    }

    function getNode($l1, $l2) {
        $prev = null;
        $plus = 0;
        
        while(true) {
            if ($l1 === null && $l2 === null && !$plus) {
                break;
            }

            $val = 0;
            if ($l1 !== null) {
                $val += $l1->val;
            }

            if ($l2 !== null) {
                $val += $l2->val;
            }

            $val += $plus;

            $plus = 0;
            if ($val > 9) {
                $val = $val % 10;
                $plus = 1;
            }
            
            $node = new ListNode($val, null);
            $node->next = $prev;

            $prev = $node;
            
            if ($l1 !== null) {
                $l1 = $l1->next;
            }

            if ($l2 !== null) {
                $l2 = $l2->next;
            }
        }

        return $node;
    }
}
// @lc code=end

