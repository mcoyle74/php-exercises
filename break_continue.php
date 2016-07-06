<?php

foreach (range(1, 100) as $i) {
	if ($i % 2 == 0) {
		echo "{$i}\n";
	} else {
		continue;
	}
}