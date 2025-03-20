<?php
function isSumGreaterThanTen($num1, $num2): bool {
    return ($num1 + $num2) > 10;
}

echo isSumGreaterThanTen(5, 6), "\n";

function areNumbersEqual($n1, $n2): bool {
    return $n1 === $n2;
}

echo areNumbersEqual(4, 4), "\n";

$test = 0;
echo ($test == 0) ? 'верно' : '', "\n";

$age = 23;
if ($age < 10 || $age > 99) {
    echo "число меньше 10 или больше 99\n";
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна\n";
    } else {
        echo "Сумма цифр двузначна\n";
    }
}

$arr = [3, 6, 9];
if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr) . "\n";
}