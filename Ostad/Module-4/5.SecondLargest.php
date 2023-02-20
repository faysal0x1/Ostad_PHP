<?php
//  5.Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargest(array $arr)
{
    $largest = null;
    $secondLargest = null;
    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num > $secondLargest && $num != $largest) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}

$arr = [1, 5, 2, 8, 4, 9];
$secondLargest = findSecondLargest($arr);
echo "The second largest number is: " . $secondLargest;


// Output
// The second largest number is: 8