<?php
/*
 * @lc app=leetcode id=19 lang=php
 *
 * [19] Remove Nth Node From End of List
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
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $fast = $slow = $head;

        for($i = 0; $i < $n; $i++) {
            $fast = $fast->next;
        }
        if($fast === null) {
            return $head->next;
        }

        while($fast->next !== null) {
            $fast = $fast->next;
            $slow = $slow->next;
        }
        $slow->next = $slow->next->next;

        return $head;
    }
}
// @lc code=end

