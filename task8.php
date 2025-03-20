<?php
function increaseEnthusiasm($String): string {
    return $String . "!";
}

echo increaseEnthusiasm("my str") . "\n";

function repeatThreeTimes($string): string {
    return $string . $string . $string;
}

echo repeatThreeTimes("string1") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("Rountable")) . "\n";

function cut($string, $length = 10): string {
    return substr($string, 0, $length);
}

echo cut("alsknonawxjnsaojisab81762312738gjk") . "\n";




function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) { 
        echo $arr[$index] . " "; 
        printArrayRecursively($arr, $index + 1);
    }
}

$arr = [5, 2, 6, 4, 8];
printArrayRecursively($arr);

echo "\n";

function sumDigitsRecursively($num) {
    if ($num <= 9) {
        return $num;
    }

    return sumDigitsRecursively(array_sum(str_split($num)));
}

echo sumDigitsRecursively(2308); 
echo "\n";
echo sumDigitsRecursively(67325); 