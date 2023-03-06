<?php

require_once __DIR__ .'/vendor/autoload.php';

use Airwrk\LiveCoding\Problem1;
use Airwrk\LiveCoding\Problem3;
use Airwrk\LiveCoding\Problem2;

try{

    echo "\nproblem 3: \n";
    $revCount = (new Problem3())->reverseAndAdd(array(1, 13, 10, 12, 31));

    echo "\n" .$revCount. "\n";


    echo "\n Problem 2: \n";
    $revCount = (new Problem2())->fizzBuzz(15);

    echo "<pre>";
    print_r( $revCount);


    echo "\nProblem 1:\n";

    $movingZero = ( new Problem1())->solveMovingZero([0,1,0,3, 12]);

    echo "<pre>";
    print_r($movingZero);



}catch(\Exception $exception){
    //var_dump($exception);
}


