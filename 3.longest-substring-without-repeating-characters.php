<?php
/*
 * @lc app=leetcode id=3 lang=php
 *
 * [3] Longest Substring Without Repeating Characters
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len1 = strlen($s);
        if (!$len1) {
            return $len1;
        }

        $max = 1;
        $p = [];
        for($i = 0, $j = 0; $i < $len1; $i++) {
            $code = ord($s[$i]);
            if (!array_key_exists($code, $p)) {
                $p[$code] = $i;
                continue;
            }
            
            $strlen = $i - $j;
            $max = $strlen > $max ? $strlen : $max;
            $i = $p[$code];
            $j = $i + 1;
            $p = [];
        }
        
        $cnt = count($p);
        $max = $cnt > $max ? $cnt : $max;
        
        return $max;
    }
}
// @lc code=end