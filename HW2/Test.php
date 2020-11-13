<?php

function TestRead()
{
	$result = ReadFromConsole('true');
	echo 'true = '.gettype($result).' '.($result === true ? 'passed' : 'failed').PHP_EOL;

	$result = ReadFromConsole('false');
	echo 'false = '.gettype($result).' '.($result === false ? 'passed' : 'failed').PHP_EOL;

	$result = ReadFromConsole('end');
	echo 'end = '.gettype($result).' '.($result === null ? 'passed' : 'failed').PHP_EOL;

	$result = ReadFromConsole('1.3');
	echo $result.' = '.gettype($result).' '.($result === 1.3 ? 'passed' : 'failed').PHP_EOL;

	$result = ReadFromConsole('1');
	echo $result.' = '.gettype($result).' '.($result === 1 ? 'passed' : 'failed').PHP_EOL;

	$result = ReadFromConsole('abracadabra');
	echo $result.' = '.gettype($result).' '.($result === 'abracadabra' ? 'passed' : 'failed').PHP_EOL;
}