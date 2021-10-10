<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $len = count($nums);

        for ($i = 0; $i < $len - 1; ++$i) {
            $sub = $target - $nums[$i];
            for ($j = $i + 1; $j < $len; ++$j) {
                if ($nums[$j] === $sub) {
                    return [$i, $j];
                }
            }
        }

        return [];
    }
}
// @lc code=end

