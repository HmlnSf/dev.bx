<?php

require_once 'ReadFromConsole.php';

echo 'Введите числа, которые хотите просуммировать: ';

ReadFromConsole($array);

$sum = 0;

foreach ($array as $value)
{
	$sum += $value;
}

echo 'Результат: '.$sum;