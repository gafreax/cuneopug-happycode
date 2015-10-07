<?php
// php55-finally.php
// @author Gabriele Fontana <gafreax@gmail.com>
// Some Example for finally keywords

namespace Talk;
use \Exception;
class Foo
{
	private function check($number)
	{
		if(is_numeric($number) == false)
			throw new Exception($number . ' not a number');
	}

	public function bar($number)
	{
		try {
			$this->check($number);
		} catch (Exception $e) {
			echo 'Exception: ' . $e->getMessage() . PHP_EOL;
		} finally {
			echo 'finally '. $number . ' processed' . PHP_EOL;
		}
	}
}


if(count($argv) !== 2) {
	echo 'Usage: ' . $argv[0] . ' <param>'. PHP_EOL;
	die();
}

$foo = new Foo();
$foo->bar($argv[1]);
