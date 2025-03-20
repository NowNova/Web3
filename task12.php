<?php

$nums = [3, 6, 9, 12, 18];
$average = array_sum($nums) / count($nums);
echo "Avg: $average\n";

$sum = array_sum(range(1, 100));
echo "сумма от 1 до 100: $sum\n";

$nums = [1, 6, 9, 19, 25];
$square = array_map('sqrt', $nums);
print_r($square);

$letters = range('a', 'z');
$nums = range(1, 26);
$array = array_combine($letters, $nums);
print_r($array);

$numbers = '1234567890';
$pairs = str_split($numbers, 2);
$sumfPairs = array_sum($pairs);
echo "cумма пар чисел: $sumfPairs\n";