<?php
//  2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenateFromEnd($str1, $str2)
{
    // $str1Len = strlen($str1);
    // $str2Len = strlen($str2);
    // if ($str1 === null) {
    //     return $str2;
    // }
    // if ($str2 === null) {
    //     return $str1;
    // }
    return $str1 . $str2;
}


$str1 = '';
$str2 = 'World';
$result = concatenateFromEnd($str1, $str2);
echo $result; // outputs 'HellWorld'