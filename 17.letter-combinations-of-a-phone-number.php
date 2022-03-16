<?php
/*
 * @lc app=leetcode id=17 lang=php
 *
 * [17] Letter Combinations of a Phone Number
 */

// @lc code=start
class Solution {

    public $keyboard = [
            '2' => ['a', 'b', 'c'],
            '3' => ['d', 'e', 'f'],
            '4' => ['g', 'h', 'i'],
            '5' => ['j', 'k', 'l'],
            '6' => ['m', 'n', 'o'],
            '7' => ['p', 'q', 'r', 's'],
            '8' => ['t', 'u', 'v'],
            '9' => ['w', 'x', 'y', 'z'],
    ];

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        if(!$digits) {
            return [];
        }

        $len = strlen($digits);
        if($len === 1) {
            return $this->keyboard[$digits];
        }
        
        $first = $this->keyboard[$digits[0]];
        $i = 1;

        do{
            $str = substr($digits, $i++, 1);
            if(empty($str)){
                break;
            }

            $first = $this->combination($first, $str);
        }while(true);

        return $first;
    }

    function combination($arr1, $str)
    {
        $res = [];
        $arr = $this->keyboard[$str];
        foreach ($arr1 as $ch) {
            foreach($arr as $item) {
                $res[] = $ch . $item;
            }
        }

        return $res;
    }
}
// @lc code=end

