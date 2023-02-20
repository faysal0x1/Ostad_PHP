<?php

//  4.Write a PHP function to check if a string contains only letters and whitespace.

function containsOnlyLettersAndWhitespace($string)
{
    if (!preg_match('/^[a-zA-Z\s]+$/', $string)) {
        return $bug[] = "String must contain letters";
    }
    return "Is a valid Input";
}
$string1 = 'Hello World';
$string2 = 'Hello123';


echo $string1 . " " . containsOnlyLettersAndWhitespace($string1);
