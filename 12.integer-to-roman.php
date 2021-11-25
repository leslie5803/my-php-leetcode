<?php
/*
 * @lc app=leetcode id=12 lang=php
 *
 * [12] Integer to Roman
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $roman = '';
        
        $i = intval($num / 1000);
        $roman .= str_repeat('M', $i);
        $num = $num % 1000;
        $i = intval($num / 100);
        if($i === 9) {
            $roman .= 'CM';
        }else if ($i === 4){
            $roman .= 'CD';
        }else {
            if($i >= 5) {
                $roman .= 'D' . str_repeat('C', $i % 5);
            }else {
                $roman .= str_repeat('C', $i % 5);
            }
        }
        $num = $num % 100;
        $i = intval($num / 10);
        if($i === 9) {
            $roman .= 'XC';
        }else if($i === 4) {
            $roman .= 'XL';
        } else {
            if($i >= 5) {
                $roman .= 'L' . str_repeat('X', $i % 5);
            }else {
                $roman .= str_repeat('X', $i % 5);
            }
        }
        $i = $num % 10;
        if($i === 9) {
            $roman .= 'IX';
        }else if($i === 4) {
            $roman .= 'IV';
        }else {
            if($i >= 5) {
                $roman .= 'V' . str_repeat('I', $i % 5);
            }else {
                $roman .= str_repeat('I', $i % 5);
            }
        }

        return $roman;
    }
}
// @lc code=end

