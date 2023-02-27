<?php

$fruits = ['apple', 'orange', 'pear'];

// // Get length

// echo count($fruits);

// echo PHP_EOL;
// // Search in array

// var_dump(in_array('apple', $fruits));

// // Add to array

// $fruits[] = 'grape';
// echo PHP_EOL;
// echo PHP_EOL;
// print_r($fruits);

// array_push($fruits, 'blueberry', 'straberry');


// echo PHP_EOL;
// print_r($fruits);
// // Insert at first

// array_unshift($fruits, 'mango');

// echo PHP_EOL;
// print_r($fruits);

// // Remove from array

// array_pop($fruits);
// echo PHP_EOL;
// print_r($fruits);

// // Remove at first
// array_shift($fruits);

// echo PHP_EOL;
// print_r($fruits);

// // remove at specific situation

// // unset($fruits[2]);

// // split into 2 chunk

// $chunkedArray = array_chunk($fruits, 2);

// echo PHP_EOL;
// print_r($fruits);
// print_r($chunkedArray);


// Array Merge
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);

// print_r($arr3);

// Spread operator

$arr4 = [...$arr1];

// print_r($arr4);

// Combine

$a = ['green', 'red', 'yellow1'];
$b = ['avocado', 'apple', 'test'];
$c = array_combine($a, $b);

// print_r($c);

// priinting only keys

$keys = array_keys($c);
// print_r($keys);


$flipped = array_flip($c);

// print_r($flipped);
// Range

$num = range(1, 20);

// print_r($num);

$newNum = array_map(function ($num) {
    return "Number ${$num}";
}, $num);

print_r($newNum);


// Array filter

$less10 = array_filter(
    $num,
    fn ($num) =>
    $num <= 10
);

print_r($less10);

// Array Reduce

$sum = array_reduce(
    $num,
    fn ($carry, $num) =>
    $carry + $num
);

var_dump($sum);
