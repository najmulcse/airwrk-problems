<?php

require_once __DIR__ .'/vendor/autoload.php';

use Airwrk\LiveCoding\Problem1;
use Airwrk\LiveCoding\Problem3;

try{

    echo "problem 3: ";
    $revCount = (new Problem3())->getDistinctCount([1,13,10,12,31]);

    echo $revCount;


    echo "Problem 1:";

    $movingZero = ( new Problem1())->solveMovingZero([0,1,0,3, 12]);

    echo "<pre>";
    print_r($movingZero);



}catch(\Exception $exception){
    //var_dump($exception);
}


