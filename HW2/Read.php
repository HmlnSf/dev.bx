<?php

require_once 'Test.php';

/*
 * @test 'true' = true
 * @test 'false' = false
 * @test 'end' = null
 * @test '1.3' = 1.3
 * @test '1' = 1
 * @test 'abracadabra' = 'abracadabra'
 */

function ReadFromConsole(string $input = null)
{
	if ($input == null)
	{
		$input = trim(fgets(STDIN)); //Функционал для чисел, введенных пользователем
	}

	/*Приведение типов*/

	if ($input === 'true')
	{
		$input = true;
	}
	elseif ($input === 'false')
	{
		$input = false;
	}
	elseif (is_numeric($input))
	{
		$input = +$input;
	}
	elseif ($input === 'end')
	{
		$input = null;
	}
	//Выражение остается строкой во всех остальных случаях

	return $input; //Иначе возвращаем аргумент, пришедший из теста
}