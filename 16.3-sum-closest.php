<?php
/*
 * @lc app=leetcode id=16 lang=php
 *
 * [16] 3Sum Closest
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums, SORT_ASC); 

        $len = count($nums);
        $close = $nums[0] + $nums[1] + $nums[2];

        for($i = 0; $i < $len - 2; $i++) {
            if($i !== 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $l = $i + 1;
            $r = $len - 1;

            while($l < $r) {
                $s = $nums[$i] + $nums[$l] + $nums[$r];
                if ($s === $target) {
                    return $target;
                }

                if(abs($target - $s) < abs($target - $close)) {
                    $close = $s;
                }

                if ($s < $target) {
                    $l++;
                }else {
                    $r--;
                }

                while($l < $r && $nums[$l] === $nums[$l - 1]) $l++;
                while($l < $r && $nums[$r] === $nums[$r + 1]) $r--;
            }
        }

        return $close;
    }
}
// @lc code=end

