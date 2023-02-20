<?php
//  1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sortStringsByLength(array $strings): array
{
    usort($strings, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}


$unsorted = ['cat', 'apple', 'dog', 'banana'];
$sorted = sortStringsByLength($unsorted);
print_r($sorted);


// OutPut
// Array
// (
//     [0] => cat
//     [1] => dog
//     [2] => apple       
//     [3] => banana      
// )