<?php

/*
 * @test './test1/' - 'Пустая директория'
 * @test './test2/' - 'Разные файлы, все читаемые'
 * @test './test3/' - 'Разные файлы, есть нечитаемые'
 * @test './test4/' - 'Директория не является директорией'
 * @test './test5/' - 'Директории не существует'
 */

 function getDirectoryStatus(string $input = '.') //По умолчанию анализирует текущую директорию
{

$currentDir = opendir($input);

$listDS = [
	'dirs' => [
		'is_readable' => [],
		'is_writable' => [],
	],
	'files' => [
		'is_readable' => [],
		'is_writable' => [],
		'size' => [],
	],
];

while ($element = readdir($currentDir))
{
	if (in_array($element, ['.','..']))
	{
		continue;
	}
	if (is_dir($element))
	{
		if (is_readable($element))
		{
			$listDS['dirs']['is_readable'][] = $element;
		}
		if (is_writable($element))
		{
			$listDS['dirs']['is_writable'][] = $element;
		}
	}
	elseif (is_file($element))
	{
		if (is_readable($element))
		{
			$listDS['files']['is_readable'][] = $element;
		}
		if (is_writable($element))
		{
			$listDS['files']['is_writable'][] = $element;
		}
		$listDS['files']['size'][] = filesize($element);
	}
}

closedir($currentDir);

print_r($listDS);

}