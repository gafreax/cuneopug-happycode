<?php
// php56-variadic.php
// @author Gabriele Fontana <gafreax@gmail.com>
// Some Example for php variadic opposite to func_get_args()

function ex(...$bar) {
	foreach ($bar as $foo) echo 'foo: '. $foo . ' ';
}

ex(array_slice($argv,1));