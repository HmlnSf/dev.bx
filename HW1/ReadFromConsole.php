<?php

function ReadFromConsole(&$array)
{

	while ($input = trim(fgets(STDIN))) //Допустим, слова для окончания ввода не требуется
	{
		$array[] = $input;
	}

}

//var_export ($array);