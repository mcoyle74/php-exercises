<?php

require_once 'Rectangle.php';

class Square extends Rectangle
{
	public function __construct($side)
	{
		parent::__construct($side, $side);
	}
	public function perimeter()
	{
		return parent::getDimensions()['height'] * 4;
	}
	public function area()
	{
		return pow(parent::getDimensions()['height'], 2);
	}
}

?>