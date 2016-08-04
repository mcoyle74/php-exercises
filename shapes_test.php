<?php

require_once 'Rectangle.php';

$rectangle1 = new Rectangle(4, 7);
$rectangle2 = new Rectangle(3, 5);
$rectangle3 = new Rectangle(5, 8);
$rectangle4 = new Rectangle(11, 9);

echo 'Area of rectangle 1 is ' . $rectangle1->area() . PHP_EOL;
echo 'Area of rectangle 2 is ' . $rectangle2->area() . PHP_EOL;
echo 'Area of rectangle 3 is ' . $rectangle3->area() . PHP_EOL;
echo 'Area of rectangle 4 is ' . $rectangle4->area() . PHP_EOL;

?>