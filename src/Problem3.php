<?php

namespace Airwrk\LiveCoding;

class Problem3
{
    function reverseAndAdd($nums) {
        $distinct_nums = array();
        foreach ($nums as $num) {
            // Reverse the digits of num
            $reversed_num = (int) strrev(strval($num));
            // Add the reversed integer to the end of nums if it's not already in there
            if (!in_array($reversed_num, $nums)) {
                $nums[] = $reversed_num;
            }
            // Add the original integer to the distinct_nums array if it's not already in there
            if (!in_array($num, $distinct_nums)) {
                $distinct_nums[] = $num;
            }
        }
        return count($distinct_nums);
    }

}