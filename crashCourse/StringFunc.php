<?php
$str = "hello world";

// get the length
echo strlen($str);

// position o a string
echo PHP_EOL;
echo strpos($str, 'o');

// rev a string

// echo strrev($str);

// Convert to lower
echo strtolower($str);

// Covert to upper

echo strtoupper($str);

// convert the first character to upper

echo ucwords($str);

echo ucfirst($str);

// replace

echo str_replace("world", "Everyone", $str);
