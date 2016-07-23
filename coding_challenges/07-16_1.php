<?php

// Given a whole number from 1-9, turn it into the word it represents.
// Example input: 5
// output: five

// I thought of this solution while waiting for my solutions to be checked. It's much shorter :)
$numbers = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];

fwrite(STDOUT, 'Enter a number from 1 to 9: ');
$number = fgets(STDIN);

echo $numbers[(array_search($number, $numbers))];

// switch ($number) {
// 	case 1:
// 		fwrite(STDOUT, 'One' . PHP_EOL);
// 		break;
// 	case 2:
// 		fwrite(STDOUT, 'Two' . PHP_EOL);
// 		break;
// 	case 3:
// 		fwrite(STDOUT, 'Three' . PHP_EOL);
// 		break;
// 	case 4:
// 		fwrite(STDOUT, 'Four' . PHP_EOL);
// 		break;
// 	case 5:
// 		fwrite(STDOUT, 'Five' . PHP_EOL);
// 		break;
// 	case 6:
// 		fwrite(STDOUT, 'Six' . PHP_EOL);
// 		break;
// 	case 7:
// 		fwrite(STDOUT, 'Seven' . PHP_EOL);
// 		break;
// 	case 8:
// 		fwrite(STDOUT, 'Eight' . PHP_EOL);
// 		break;
// 	case 9:
// 		fwrite(STDOUT, 'Nine' . PHP_EOL);
// 		break;
// }