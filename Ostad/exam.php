<?php

function comCalculator($tutFee)
{
    //   Assignment 2
    // FAysal
    $calculator = (20000 <= $tutFee) ? $tutFee * 25 / 100 : ((10000 <= $tutFee && 20000 >= $tutFee) ? $tutFee * 20 / 100 : ((10000 >= $tutFee && 7000 <= $tutFee) ? $tutFee * 15 / 100 : ((7000 >= $tutFee) ? "0" : false)));
    echo "commission is for " . $tutFee . " is = " . $calculator;
    //

}

echo (comCalculator(5000));
