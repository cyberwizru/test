<?php

class TextHndler
{
	const nl = '<br/>';
	
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
		if(!is_array($this->input) || empty($this->input) && !is_array($this->fields) || empty($this->fields))
			return false;
			
		foreach($this->input as $field => $value)
		{
			if(array_key_exists($field, $this->fields))
			{
				$this->text .= $this->fields[$field] . $value . self::nl;
			}
		}
		return $this->text;
	}
}

$fields = array
(
	'name'	=> 'Имя: ',
	'phone' => 'Телефон: ',
	'email' => 'Почта: '
);


$text = new TextHandler($_POST, $fields);

echo $text->build();
?>