<style>
	input {display:block;}
	input:before {content:"field"}
</style>
<form method="post">
	<input type="text" name="name" />
	<input type="text" name="phone" />
	<input type="text" name="email" />
	<input type="submit" name="Отправить" />
</form>
<?php

	$message = '';

	$fields = array
	(
		'name'	=> 'Имя: ',
		'phone' => 'Телефон: ',
		'email' => 'Почта: '
	);
	
	
	if(!empty($_POST))
	{
		foreach($_POST as $field => $value)
		{
			if(array_key_exists($field, $fields))
			{
				$message .= $fields[$field] . $value . '<br/>';
			}
		}
	}
	echo $message;