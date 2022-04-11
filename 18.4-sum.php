<?php
/*
 * @lc app=leetcode id=18 lang=php
 *
 * [18] 4Sum
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    public function fourSum($nums, $target)
    {
        $len = count($nums);
        if (!$len) {
            return [];
        }

        sort($nums);

        $res = [];
        for ($i = 0, $l1 = $len - 3; $i < $l1; $i++) {
            if ($i && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $sum = $target - $nums[$i];
            for ($j = $i + 1, $len1 = $len - 2; $j < $len1; $j++) {
                if ($j === ($i + 1) || $nums[$j] !== $nums[$j - 1]) {
                    $x = $j + 1;
                    $y = $len - 1;

                    while ($x < $y) {
                        $s = $nums[$j] + $nums[$x] + $nums[$y];
                        if ($s === $sum) {
                            $res[] = [$nums[$i], $nums[$j], $nums[$x], $nums[$y]];
                            $x++;
                        } else if ($s > $sum) {
                            $y--;
                        } else {
                            $x++;
                        }

                        while ($x < $y && ($x - 1) > $j && $nums[$x] === $nums[$x - 1]) {
                            $x++;
                        }

                        while ($x < $y && $nums[$y] === $nums[$y + 1]) {
                            $y--;
                        }

                    }
                }
            }
        }

        return $res;
    }
}
// [-2, -1, 0, 0, 1, 2]
// [-4, -1,-1, 0, 1, 2] -1
// [-5, -4, -3, -2, 1, 3, 3, 5] -11

// @lc code=end
