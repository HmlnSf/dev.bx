<?php

require_once 'Read.php';

TestRead();

echo "Число 1: "; //Здесь и далее - выполнение основной программы сумматора
$array[0] = ReadFromConsole();

$i = 0;

while ($array[$i] != null) //Считывать до ключевого слова end
{
	$i++;
	echo 'Число'.($i+1).': ';
	$array[$i] = ReadFromConsole();
}

$array[$i]=0;

$sum = 0;
$tmp = 1;

foreach ($array as $value)
{
	if (is_numeric($value)) //Проверка на корректный ввод
	{
		$sum += $value;
	}
	else
	{
		$tmp = 0;
		break;
	}
}

if ($tmp == 0)
{
	echo 'Сумму вычислить невозможно!';
}
else
{
	echo 'Результат: '.$sum;
}