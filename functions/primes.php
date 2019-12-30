<?php

	/*Actually task was to find too prime numbers (first pair)
		which spaced from each other on preassigned distanceю
		But I decided to divide this function on some more just in oder I need them

		https://www.codewars.com/kata/561e9c843a2ef5a40c0000a4
	*/

	function isPrime($check) {
	//check if input is prime
		$trigger = 0;

		for ($i=2; $i < $check; $i++) { 
			if ($check % $i == 0) {
				$trigger++;
				break;
			}
		}
		if ($trigger == 0) {
			return (true);
		}
		else {
			return (false);
		}
	}


	function nextPrime($input) {
	//return next prime number
		if (isPrime($input) == true) {
			$input++;
		}
		for ($input; true; $input++) { 
			if (isPrime($input) == true) {
				return ($input);
				break;
			}
		}
	}

	function previousPrime($input) {
	//return previous prime number
		if (isPrime($input) == true) {
			$input--;
		}
		for ($input; true; $input--) { 
			if (isPrime($input) == true) {
				return ($input);
				break;
			}
		}
	}

	function gapInPrimes ($start, $end, $gap) {

		if (isPrime($start) == false) {
			$start = nextPrime($start);
		}

		if (isPrime($end) == false) {
			$end = previousPrime($end);
		}

		for ($a = $start; $a <= $end; $a = nextPrime($a)) {
			$trigger = 0; 
			if (nextPrime($a) - $a == $gap) {
				$b = nextPrime($a);
				$gap = $b - $a;
				$trigger = 1;
				return ("$a, $b");
				break;
			}
		}

		if ($trigger == 0) {
			return NULL;
		}
	}

?>