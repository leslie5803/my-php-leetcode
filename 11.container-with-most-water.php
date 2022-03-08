<?php
/*
 * @lc app=leetcode id=11 lang=php
 *
 * [11] Container With Most Water
 */

// @lc code=start
class Solution {


    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $len = count($height);
        $area = 0;
        $l = 0;
        $r = $len - 1;
        // for($i = 0, $len1 = $len - 1; $i < $len1; $i++) {
        //     for($j = $len; $j > $i; $j--) {
        //         $area = max(min($height[$i], $height[$j]) * ($j - $i), $area);
        //     }
        // }
        while($l < $r) {
            $area = max($area, min($height[$l], $height[$r]) * ($r - $l));
            if($height[$l] < $height[$r]) {
                $l++;
            } else {
                $r--;
            }
        }

        return $area;
    }
}
// @lc code=end

