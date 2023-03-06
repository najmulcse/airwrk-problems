<?php

namespace Airwrk\LiveCoding;

class Problem3
{
    public function getDistinctCount($nums)
    {
        $seen = [];

        foreach ($nums as $num){
            $revNum =  strrev(strval($num));
            if(!in_array($revNum, $seen)){
                $nums[] = intval($revNum);
                $seen[] = $revNum;
            }
        }
        return count($seen);

    }

}