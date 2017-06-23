<?php

/*
	Write a program to calculate multiplication or division of two numbers. Users should
	have input boxes to enter two different numbers and then clicks either a 'multiply'
	button or a 'divide' button. The solution is then printed out. You may use any format.

	Example:
		inputs:	1st number = 12
				2nd number = 10
				multiply
		output: 120
*/

function pageController()
{
	$operand1 = isset($_GET['operand1']) ? $_GET['operand1'] : null;
	$operand2 = isset($_GET['operand2']) ? $_GET['operand2'] : null;

	if (isset($_GET['*'])) {
		$operator = ' * ';
	} else if (isset($_GET['/'])) {
		$operator = ' / ';
	} else {
		$operator = null;
	}
	
	if (isset($_GET['*'])) {
		$answer = $operand1 * $operand2; 
	} elseif (isset($_GET['/'])) {
		$answer = $operand1 / $operand2;
	}

	$result = (is_null($operator)) ? 'result:' : $operand1 . $operator . $operand2 . ' = ' . $answer;

	return ['result' => $result];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Multiply | Divide</title>
	<style type="text/css">
		body {
			font-family: Helvetica, Arial, sans-serif;
		}
	</style>
</head>
<body>
	<form method="GET" action="/a1.php">
		<div>
			<label for="first-number">1st Number: </label>
			<input id="first-number" name="operand1" type="number" autofocus>
		</div>
		<div>
			<label for="second-number">2nd Number: </label>
			<input id="second-number" name="operand2" type="number">
		</div>

		<button type="submit" name="*" value="*">Multiply</button>
		<button type="submit" name="/" value="/">Divide</button>
	</form>
	<p><?= $result ?></p>
</body>
</html>