<?php

$a = 10;
$b = 3; 
echo "%:",$a % $b, "\n";


$a = 10;
$b = 3;
if ($a % $b == 0) {
    echo "a делим на b, результат ", $a / $b, "\n";
} else {
    echo "a делим на b с остатком ", $a % $b, "\n";
}


$st = pow(2, 10);
$sr = sqrt(245);

$array = array(4, 2, 5, 19, 13, 0, 10);
$sumSqr = 0;
foreach ($array as $value) {
    $sumSqr += $value**2;
}

echo "1. 2**10 = ", $st,
"\n2. 245**(0.5) = ", $sr,
"\n3. Корень из суммы квадратов элементов массива: ", sqrt($sumSqr), "\n";



$n1 = sqrt(379);
$st0 = round($n1);
$st1 = round($n1, 1);
$st2 = round($n1, 2);

$nm2 = sqrt(587);
$array = ['floor' => floor($nm2), 'ceil' => ceil($nm2)];

echo "Результаты округления корня из числа 379:",
"\n$st0", "\n$st1", "\n$st2";
echo "\nРезультат округления корня из числа 587: ";
var_dump($array);


$array = [4, -2, 5, 19, -130, 0, 10];
echo "минимальное значение в массиве: ", min($array),
"\nмаксимальное значение в массиве: ", max($array), "\n";



$randomNumber = rand(1, 100);  
echo "Случайное число от 1 до 100: $randomNumber\n";  

$randomArray = [];  
for ($i = 0; $i < 10; $i++) {  
    $randomArray[] = rand(1, 100);  
}  
echo "Массив случайных чисел: " . implode(", ", $randomArray) . "\n";  


$a = -66;
$b = 98;
echo "a= $a, b= $b";
echo '|a - b| = ', abs($a - $b);
echo "\n|b - a| = ", abs($b - $a), "\n";

$originalArray = [1, 2, -1, -2, 3, -3];  
$positiveArray = array_map("abs", $originalArray);  
echo "Массив с положительными числами: " . implode(", ", $positiveArray) . "\n";



$a = 30;

$number = 30;  
$divs = [];  
for ($i = 1; $i <= $number; $i++) {  
    if ($number % $i == 0) {  
        $divs[] = $i;  
    }  
}  
echo "Делители числа $number: " . implode(", ", $divs) . "\n"; 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $value) {
    if ($sum <= 10) {
        $sum += $value;
        $count++;
    }
}
echo "Чтобы сумма получилась > 10, надо сложить первые $count чисел.";