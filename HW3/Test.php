<?php

function TestDS()
{

	$result = getDirectoryStatus('./test1/');
	$array = [
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
	echo 'Пустая директория = '.$result.($array === $result ? 'passed' : 'failed').PHP_EOL;

	/*$result = getDirectoryStatus('./test2/');
	$array = [
		'dirs' => [
			'is_readable' => [d],
			'is_writable' => [],
		],
		'files' => [
			'is_readable' => [a.php,b.txt,c.html],
			'is_writable' => [],
			'size' => [0,2,0],
		],
	];
	echo 'Разные файлы, все читаемые = '.$result.($array === $result ? 'passed' : 'failed').PHP_EOL;

	$result = getDirectoryStatus('./test3/');
	echo 'Разные файлы, есть нечитаемые = '.$result.($array === $result ? 'passed' : 'failed').PHP_EOL;

	$result = getDirectoryStatus('./test4/');
	echo 'Директория не является директорией = '.$result.($result === null ? 'passed' : 'failed').PHP_EOL;

	$result = getDirectoryStatus('./test5/');
	echo 'Директории не существует = '.$result.($result === null ? 'passed' : 'failed').PHP_EOL;*/

}