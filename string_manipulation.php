<?php

// Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulation(string $text)
{
    $lowercaseText = strtolower($text);
    $modifiedText = str_replace('brown', 'red', $lowercaseText);
    echo $modifiedText;
}

stringManipulation($text);
