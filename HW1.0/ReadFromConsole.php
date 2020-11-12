<?php

function ReadFromConsole(&$array)
{

	echo "Число 1: ";
	$array[0] = trim(fgets(STDIN));

	$i = 0;

	while ($array[$i] != 'end') //Считывать до ключевого слова через пробел
	{
		$i++;
		echo 'Число'.($i+1).': ';
		$array[$i] = trim(fgets(STDIN));
	}

	$array[$i]=0;

}

//var_export ($array);