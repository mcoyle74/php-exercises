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
		return ($this->height * 2) + ($this->width * 2);
	}
	public function area()
	{
		return pow($this->width, 2);
	}
}

?>