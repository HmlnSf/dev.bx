<?php

require_once 'ReadFromConsole.php';

echo 'Введите числа, которые хотите просуммировать и ключевое слово end.'."\n";

ReadFromConsole($array);

$sum = 0;

foreach ($array as $value)
{
	$sum += $value;
}

echo 'Результат: '.$sum;