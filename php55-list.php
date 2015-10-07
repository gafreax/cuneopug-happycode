<?php
// php55-list.php
// @author Gabriele Fontana <gafreax@gmail.com>
// Some Example for php list in foreach
$array = [[3,55],[123,66]];
foreach($array as list($a,$b))
	echo 'Listato ' . $a . ' ' . $b . PHP_EOL;