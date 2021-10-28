<?php
/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x >= 0 && $x < 10){
            return true;
        }

        if ($x < 0 || $x % 10 === 0) {
            return false;
        }


        return $this->reverse($x) === $x;
    }

    function reverse($x){
        $sum = 0;
        while($x >= 10){
            $last = $x % 10;
            $x = intval($x / 10);
            $sum = $sum * 10 + $last;
        }

        return $sum * 10 + $x;
    }
}
// @lc code=end

