<?php

$contents = scandir('.');
foreach ($contents as $file) {
	if (pathinfo($file, PATHINFO_EXTENSION) == 'phpt') {
		echo exec("php $file") . PHP_EOL;
	}
}