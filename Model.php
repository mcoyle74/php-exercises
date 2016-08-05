<?php

class Model
{
	private $attributes = [];

	protected static $table;

	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public function __get($name)
	{
		return isset($this->attributes[$name]) ? $this->attributes[$name] : NULL;
	}

	public static function getTableName()
	{
		return static::$table;
	}
}


$model = new Model();
$model->name = 'Michael';
$model->group = 'Codeup';
$model->age = 42;

echo 'Name: ' . $model->name . PHP_EOL . 
	'Group: ' . $model->group . PHP_EOL .
	'Age: ' . $model->age . PHP_EOL;
?>