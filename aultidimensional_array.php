<?php

// Task 4: Multidimensional Array

$studentGrades = [
    "Student 1" => ['Math' => 85, 'English' => 92, 'Science' => 78],
    "Student 2" => ['Math' => 88, 'English' => 95, 'Science' => 90],
    "Student 3" => ['Math' => 75, 'English' => 80, 'Science' => 85],
];

function calculateAverageGrade($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $numberOfSubjects = count($grades);
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / $numberOfSubjects;
        echo "{$student} average Grade: {$averageGrade}\n";
    }
}
calculateAverageGrade($studentGrades);
