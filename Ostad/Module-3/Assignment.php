<?php

// Check IF a number is Even or Odd
function checkNum($n)
{
    if ($n % 2 == 0) {
        return "Evenn";
    } else {
        return "ODD";
    }
}

$num = 0;
echo checkNum(0);
//  1+2+3...…….100  Write a loop to calculate the summation of the series
function sumSeries($start, $end)
{
    $sum = 0;
    for ($i = $start; $i <= $end; $i++) {
        $sum += $i;
    }
    return $sum;
}

$start = 1;
$end = 100;
echo (sumSeries($start, $end));