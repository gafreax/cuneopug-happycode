<?php
// php55-list.php
// @author Gabriele Fontana <gafreax@gmail.com>
// Some Example for php list in foreach
$array = [1,[2,3],[2,[3,4]]];
print_r($array);

foreach($array as $puppa) echo $puppa;
echo PHP_EOL;
foreach($array as list($a,list($b,$c)))
	echo 'Listato ' . $a . ' ' . $b . ' ' . $c .  PHP_EOL;
