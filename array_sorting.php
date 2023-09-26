<?php

// Task 3: Array Sorting

$grades = [85, 92, 78, 88, 95];

function sortingGradesInDescendingOrder($grades)
{
    arsort($grades);
    print_r($grades);
}

sortingGradesInDescendingOrder($grades);
