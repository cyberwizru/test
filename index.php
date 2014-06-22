<style>
	input {display:block;}
</style>
<form method="post">
	<input type="text" name="name" />
	<input type="text" name="phone" />
	<input type="text" name="email" />
	<input type="submit" name="Send" />
</form>

<?php

class TextHandler
{
	const newline	= '<br/>';
	const void	= 'не указано';
	
	public $text = '';
	
	public $input = array();
	
	public $fields = array();
	
	public function __construct($input, $fields = array())
	{
		$this->input = $input;
		$this->fields = $fields;
	}
	
	public function build()
	{
		foreach($this->input as $field => $value)
		{
			if(array_key_exists($field, $this->fields))
			{
				$value = ($value !== '') ? $value : self::void;
				$this->text .= $this->fields[$field] . $value . self::newline;
			}
		}
		return $this->text;
	}
}

if(empty($_POST)) exit;

$fields = array
(
	'name'	=> 'Имя: ',
	'phone' => 'Телефон: ',
	'email' => 'Почта: '
);


$text = new TextHandler($_POST, $fields);

echo $text->build();
?>