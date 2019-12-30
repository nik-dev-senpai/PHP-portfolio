<?php

	//function will return nth member of Fibonacci sequence, where n = ordinal

	function FibonacciValue($ordinal) {

		if ($ordinal < 0) {
			die;
		}

		$ordinal--;

		$FibonacciNumbers = [1, 1];

		while ($ordinal > 1) {
			$lastKey = count($FibonacciNumbers) -1;
			$prelastKey = $lastKey - 1;
			$FibonacciNumbers [] = $FibonacciNumbers[$lastKey] + $FibonacciNumbers[$prelastKey];
			$ordinal--;
		}

		$lastKey = array_key_last($FibonacciNumbers);
		return ($FibonacciNumbers[$lastKey]);

	}

?>