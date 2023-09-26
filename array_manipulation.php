<?php

// Task 2: Array Manipulation

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEnvenNumbers($numbers)
{
    $oddNumbers =[];
    foreach ($numbers as $number) {
        if ($number % 2 !== 0) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
    
}

removeEnvenNumbers($numbers);
