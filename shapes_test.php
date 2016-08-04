<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle1 = new Rectangle(4, 7);
$rectangle2 = new Rectangle(3, 5);
$rectangle3 = new Rectangle(5, 8);
$rectangle4 = new Rectangle(11, 9);

echo 'Area of rectangle 1 is ' . $rectangle1->area() . PHP_EOL;
echo 'Area of rectangle 2 is ' . $rectangle2->area() . PHP_EOL;
echo 'Area of rectangle 3 is ' . $rectangle3->area() . PHP_EOL;
echo 'Area of rectangle 4 is ' . $rectangle4->area() . PHP_EOL;

$square1 = new Square(4, 4);
$square2 = new Square(7, 7);
$square3 = new Square(5, 5);
$square4 = new Square(3, 3);
$square5 = new Square(8, 8);

echo 'Area of square 1 is ' . $square1->area() . PHP_EOL;
echo 'Area of square 2 is ' . $square2->area() . PHP_EOL;
echo 'Area of square 3 is ' . $square3->area() . PHP_EOL;
echo 'Perimeter of square 3 is ' . $square3->perimeter() . PHP_EOL;
echo 'Perimeter of square 4 is ' . $square4->perimeter() . PHP_EOL;
echo 'Perimeter of square 5 is ' . $square5->perimeter() . PHP_EOL;

?>