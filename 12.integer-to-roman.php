<?php
/*
 * @lc app=leetcode id=12 lang=php
 *
 * [12] Integer to Roman
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer $num
     * @return String
     */
    public function intToRoman($num)
    {
        $roman = '';

        $nine   = ['', 'CM', 'XC', 'IX'];
        $four   = ['', 'CD', 'XL', 'IV'];
        $greate = ['', 'D', 'L', 'V'];
        $less   = ['M', 'C', 'X', 'I'];
        $steps  = [1000, 100, 10, 1];

        $i = 0;
        while ($i < 4) {
            $x = intval($num / $steps[$i]);
            if ($x < 1) {
                $i++;
                continue;
            }
            $num = $num % $steps[$i];

            $times = $x % 5;
            if ($times === 4) {
                if ($x > 5) {
                    $roman .= $nine[$i];
                    $i++;
                    continue;
                }

                $roman .= $four[$i];
                $i++;
                continue;
            }

            if ($x >= 5) {
                $roman .= $greate[$i] . str_repeat($less[$i], $times);
                $i++;
                continue;
            }

            $roman .= str_repeat($less[$i], $times);
            $i++;
        }

        return $roman;
    }
}
// @lc code=end
