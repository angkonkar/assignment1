<?php

declare (strict_types = 1);

$userInput = readline("Please enter a digit: ");
$userInput = (int)$userInput;

function pattern(int $userInput)
{
    $pattern = "";

    for ($i=1; $i <= $userInput ; $i++) { 
        for ($j=$i; $j < $userInput ; $j++) { 
            echo " ";
        }
        for ($k=0; $k <= (2 * ($i -1)); $k++) { 
            echo "*";
        }
        echo "\n";
    }
}

pattern($userInput);