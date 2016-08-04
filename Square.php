<?php

require_once 'Rectangle.php';

class Square extends Rectangle
{
	public function __construct($side)
	{
		$this->height = $side;
		$this->width = $side;
	}
	public function perimeter()
	{
		return (($this->height) * 2) + (($this->width) * 2);
	}
}

?>