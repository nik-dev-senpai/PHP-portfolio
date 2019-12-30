<?php
	
	function factorial($number) {
		$factorial = 1;
		for ($number; $number > 1; $number--) { 
			$factorial *= $number;
		}
		return ($factorial);
	}


	function permutationsAmount ($array) {
		$frequency = array_count_values($array);
		$numerator = factorial(count($array));
		$denominator = 1;
		foreach ($frequency as $value) {
			$denominator *= factorial($value);
		}
		return ($numerator/$denominator);
	}

?>