<?php
/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $num = 0;

        $roman = [
            'CM' => 900,
            'XC' => 90,
            'IX' => 9,
            'CD' => 400,
            'XL' => 40,
            'IV' => 4,
            'D'  => 500,
            'L'  => 50,
            'V'  => 5,
            'M'  => 1000,
            'C'  => 100,
            'X'  => 10,
            'I'  => 1,
        ];

        $len = strlen($s);
        $i = 0;
        while($i < $len) {
            if($i + 1 != $len) {
                if(isset($roman[$s[$i] . $s[$i + 1]])) {
                    $num += $roman[$s[$i] . $s[$i + 1]];
                    $i += 2;
                    continue;
                }
            }

            $num += $roman[$s[$i]];
            $i += 1;
        }

        return $num;
    }
}
// @lc code=end
