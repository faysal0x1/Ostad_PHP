<?php

$n = 5;
for ($i = 0; $i < $n; $i++) {
    // echo "";
    for ($j = $n; $j >= $i + 1; $j--) {
        echo " * ";
    }
    echo "\n";
}
