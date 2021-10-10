<?php
/*
 * @lc app=leetcode id=5 lang=php
 *
 * [5] Longest Palindromic Substring
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $len = strlen($s);
        if ($len === 1) {
            return $s;
        }

        if ($len === 2) {
            if ($s[0] === $s[1]) {
                return $s;
            }

            return $s[0];
        }

        $palindromic = $s[0];
        $max = 1;
        for($i = 0; $i < $len; $i++) {
            if (strlen(substr($s, $i)) < $max) {
                break;
            }
            
            for($j = $len - $i - 1; $j >= 0; $j--) {
                if ($j + 1 < $max) {
                    break;
                }

                $str = substr($s, $i, $j + 1);
                $sub = strrev($str);
                if ($sub === $str) {
                    if($max < strlen($sub)) {
                        $palindromic = $sub;
                        $max = strlen($sub);
                    }

                    break;
                }
            }
        }

        return $palindromic;
    }
}
// @lc code=end

