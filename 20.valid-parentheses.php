<?php
/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if(strlen($s) % 2) {
            return false;
        }

        while(true){
            $c = $s[0];
            $s = substr($s, 1);
            $i = $this->match($c, $s);
            if($i === false){
                return false;
            }

            $s = substr($s, 0, $i) . substr($s, $i + 1);
            if(empty($s)){
                break;
            }
        }

        return true;
    }

    function match($c, $s)
    {
        $map = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];

        if($s[0] === $map[$c]) {
            return 0;
        }

        $offset = 0;
        for($i = 0, $len = strlen($s); $i < $len; $i++) {
            if(in_array($s[$i], ['(', '{', '['], true)) {
                $offset += 2;
            }

            if($s[$i] === $map[$c] && $offset === $i) {
                return $offset;
            }
        }

        return false;
    }
}

//"({{{{}}}))"
// "(([]){})"
// "([}}])"
// "[([]])"
// @lc code=end

