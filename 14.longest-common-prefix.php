<?php
/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    public function longestCommonPrefix($strs)
    {
        $prefix = '';

        $min = min(array_map('strlen', $strs));
        if (!$min) {
            return $prefix;
        }

        for ($i = 0; $i < $min; $i++) {
            $alpha = $strs[0][$i];
            for ($j = 1, $b = count($strs); $j < $b; $j++) {
                if ($strs[$j][$i] !== $alpha) {
                    return $prefix;
                }
            }

            $prefix .= $alpha;
        }

        return $prefix;
    }
}
// @lc code=end
