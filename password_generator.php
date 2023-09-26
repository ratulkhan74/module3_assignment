<?php

// Task 5: Password Generator

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $charCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charCount);
        $randomPass = $characters[$randomIndex];
        $password .= $randomPass;
    }

    echo $password;
}
generatePassword(12);
