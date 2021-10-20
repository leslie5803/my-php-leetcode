<?php
/*
 * @lc app=leetcode id=7 lang=php
 *
 * [7] Reverse Integer
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    public function reverse($x)
    {
        if ($x < 10 && $x > -10) {
            return $x;
        }

        $reverse = 0;
        $unsign  = $x >= 0;
        $x       = abs($x);
        do {
            $last    = $x % 10;
            $reverse = $reverse * 10 + $last;
            $x       = intval($x / 10);
        } while ($x >= 10);
        $reverse = $reverse * 10 + $x;
        if (!$unsign) {
            $reverse = -$reverse;

            return $reverse < -(pow(2, 31)) ? 0 : $reverse;
        }

        return $reverse > (pow(2, 31) - 1) ? 0 : $reverse;
    }
}
// @lc code=end
