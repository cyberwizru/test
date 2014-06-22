<?php

	$message = '';

	$fields = array
	(
		'name'	=> 'Имя: ',
		'phone' => 'Телефон: ',
		'email' => 'Почта: '
	);
	
	
	
	foreach($_POST as $field => $value)
	{
		if(array_key_exists($field, $fields))
		{
			$message .= $fields[$key] . $value . '<br/>';
		}
	}
	
	echo $message;