<?php
//  2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenateFromEnd($str1, $str2)
{

    return $str1 . $str2;
}


$str1 = 'Hello ';
$str2 = 'World';
$result = concatenateFromEnd($str1, $str2);
echo $result; 
// outputs 'HellWorld'