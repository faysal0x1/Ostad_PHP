<?php
//  3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

use function PHPSTORM_META\type;

function removeFirstAndLast(array $arr): array
{
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$inputArray = [1, 2, 3, 4, 5];
$outputArray = removeFirstAndLast($inputArray);

print_r($outputArray);


// OutPut

// Array       
// (
//     [0] => 2
//     [1] => 3
//     [2] => 4
// )