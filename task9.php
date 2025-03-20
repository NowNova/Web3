<?php

$arr = [];
for ($i = 1; $i <= 5; $i++) {
    $arr[] = str_repeat('x', $i);
}
print_r($arr);


function arrayFill($value, $count): array {
    $arr = [];
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $value;
    }
    return $arr;
}
print_r(arrayFill('x', 5));



$numbers = [[1, 2, 3], [4, 5], [6]];
$sum = array_sum(array_merge(...$numbers));
echo "Сумма элементов данного массива: $sum\n";

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        $arr[$i][] = $i * 3 + $j;
    }
}
print_r($arr);

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "Результат умножения: $result\n";

$user = ['name' => 'Александр', 'surname' => 'Лишний', 'patronymic' => 'Александрович'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n";


$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '/' . $date['month'] . '/' . $date['day'] . "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
print_r($arr);
echo "Количество элементов : ", count($arr) . "\n";

echo "Последний эллемент: ", end($arr) . "\n";

echo "Предпоследний элемент: ", prev($arr) . "\n";