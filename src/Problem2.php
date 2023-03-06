<?php

namespace Airwrk\LiveCoding;

class Problem2
{
    function fizzBuzz($n) {
        $answer = array();
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $answer[] = "Airwrk";
            } else if ($i % 3 == 0) {
                $answer[] = "Air";
            } else if ($i % 5 == 0) {
                $answer[] = "wrk";
            } else {
                $answer[] = strval($i);
            }
        }
        return $answer;
    }

}