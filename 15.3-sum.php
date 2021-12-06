<?php
/*
 * @lc app=leetcode id=15 lang=php
 *
 * [15] 3Sum
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums)
    {
        $len = count($nums);
        if ($len < 3) {
            return [];
        }

        sort($nums, SORT_ASC);
        if ($nums[0] > 0) {
            return [];
        }

        $res = [];
        for ($i = 0, $len1 = $len - 2; $i < $len1; $i++) {
            if ($i === 0 || ($i > 0 && $nums[$i] !== $nums[$i - 1])) {
                $lo  = $i + 1;
                $hi  = $len - 1;
                $sum = 0 - $nums[$i];

                while ($lo < $hi) {
                    $third = $nums[$lo] + $nums[$hi];
                    if ($third === $sum) {
                        $res[] = [$nums[$i], $nums[$lo], $nums[$hi]];

                        while ($lo < $hi && $nums[$lo] === $nums[$lo + 1]) {
                            $lo++;
                        }

                        while ($lo < $hi && $nums[$hi] === $nums[$hi - 1]) {
                            $hi--;
                        }

                        $lo++;
                        $hi--;
                        continue;
                    }

                    if ($third < $sum) {
                        $lo++;
                        continue;
                    }

                    $hi--;
                }
            }
        }

        return $res;
    }
}
// @lc code=end
