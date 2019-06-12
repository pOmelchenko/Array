<?php

use POmelchenko\Arr;

require __DIR__ . '/../vendor/autoload.php';

$height = 5;
$width = 7;

echo sprintf('Создадим массив с рандомными значениями, размером %dx%d',
    $height,
    $width
) . PHP_EOL;

$array = [];

for ($i = 0; $i <= $height; $i++) {
    for ($j = 0; $j <= $width; $j++) {
        $array[$i][$j] = random_int(1, 1000);
    }
}

echo 'Покажем получившийся результат:' . PHP_EOL;

foreach ($array as $row) {
    echo implode(' ', $row) . PHP_EOL;
}

echo 'Посчитаем суммы в строках получившегося массива:' . PHP_EOL;
echo implode(' ', Arr::rowsSum($array)) . PHP_EOL;

echo 'Посчитаем суммы в столбцах получившегося массива:' . PHP_EOL;
echo implode(' ', Arr::colsSum($array)) . PHP_EOL;
