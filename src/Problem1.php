<?php

namespace Airwrk\LiveCoding;

class Problem1
{

    public function solveMovingZero(array $nums)
    {

        $nonZeroIndex = 0;
        foreach ($nums as $num){
            if($num != 0){
                $nums[$nonZeroIndex++] = $num;
            }
        }
        while ( $nonZeroIndex < count($nums)){
            $nums[$nonZeroIndex++] = 0;
        }
     return $nums;

    }
}