<?php

// generators
function oddinrange($start,$limit) {
	for($i = $start; $i < $limit; $i++) {
		if($i%2==1) yield $i;
	}
}
foreach (oddinrange(1,6,1) as $number) echo 'Processo '. $number. PHP_EOL;