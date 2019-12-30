<?php

	//this function will check if input number is keith number

	//https://www.codewars.com/kata/590e4940defcf1751c000009


	function is_keith($n) {

		$sequence = str_split($n, 1);
		$sumLenth = count($sequence);

		for ($pointer=0; TRUE; $pointer++) { 
			$newMember = 0;
			for ($key=$pointer; $key < $pointer + $sumLenth; $key++) { 
				$newMember += $sequence[$key];
			}
			$sequence[] = $newMember;
			if ($newMember >= $n) {
				break;
			}
		}

		$lastKey = count($sequence) - 1;
		if ($sequence[$lastKey] == $n) {
			echo "$n - is Keith number";
		}
		else {
			echo "$n - is not Keith number";
		}
	}

?>