<?php
// php55-generators.php
// @author Gabriele Fontana <gafreax@gmail.com>
// Some Example for php generators
if(count($argv) !== 3 || is_numeric($argv[1])===false || is_numeric($argv[2])===false) {
	echo 'Usage: ' . $argv[0] . ' <number_start>  <number_end>'. PHP_EOL;
	die();
}

// generators
function oddinrange($start,$limit) {
	for($i = $start; $i < $limit; $i++) if($i%2==1) yield $i;
}

foreach (oddinrange($argv[1],$argv[2]) as $number)
	echo 'Processo '. $number. PHP_EOL;