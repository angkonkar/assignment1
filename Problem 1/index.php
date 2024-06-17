<?php

declare (strict_types=1);


$userInput = readline("Enter a list of integers: ");

function minAbsValue($userInput): int
{
    $nonNegativeArr = [];
    $arr = explode(" ", $userInput);

    for($i=0; $i<count($arr); $i++){
        if($arr[$i] < 0){
        $arr[$i] = -1 * $arr[$i];
        array_push($nonNegativeArr, $arr[$i]); 
        }
        else{
        array_push($nonNegativeArr, $arr[$i]);
        }
    }

    $minNumer = $nonNegativeArr[0];

    for($i=0; $i<count($nonNegativeArr); $i++){
        if($minNumer>$nonNegativeArr[$i]){
        $minNumer = $nonNegativeArr[$i];
        }
    }

    return (int)$minNumer;
}

echo "Minimum absolute value is: ". minAbsValue($userInput);