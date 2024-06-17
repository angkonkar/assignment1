<?php

declare (strict_types=1);

$userInput = readline('Please enter an interger number: ');

$userInput = (int)$userInput;
function sum(int $userInput):int {
    $sum = 0;
    $isNegative = 0;

    if ($userInput < 0) {
        $isNegative = 1;
        $userInput = -1 * $userInput;
    }

    while ($userInput > 0) {
        $lastDigit = $userInput % 10;
        $userInput = (int) ($userInput / 10);
        $sum += $lastDigit;
    }

    return $isNegative ? -1 * $sum : $sum;
}

echo "The sum of the digits of the integer is: ". sum($userInput);