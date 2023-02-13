<?php
$string = 'Hello World';


$heredoc = <<<EOD
data 1
new line {$string} +1
EOD;

echo $heredoc;
//  get the 
echo "\n";
echo strlen($string);

// Find the position in substring

echo  strpos($string, 'o');
echo PHP_EOL;
echo PHP_EOL;

echo ord('A');
echo PHP_EOL;
echo ord('a');
echo chr(97);