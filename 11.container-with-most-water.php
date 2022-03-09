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

