<?php

declare(strict_types=1);

$userInput = readline("Please enter a line: ");

function reversedLine(string $userInput):string
{
    $arr = explode(' ', $userInput);
    $reversedString = '';
    for ($i=0; $i < count($arr) ; $i++) { 
        for ($j=strlen($arr[$i])-1; $j >= 0 ; $j--) { 
            $reversedString .= $arr[$i][$j];
        }
        $reversedString .= " ";
    }
    return $reversedString;
}

echo reversedLine($userInput);