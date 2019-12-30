<?php

	function isPalindrome($str) {
	//function will check if input is palindrome

			$astr = str_split($str, 1);
			$valn = count($astr);

			if ($valn % 2 === 0) {
				$vn = $valn / 2;
			}
			else {
				$vn = ($valn - 1) / 2;
				unset($astr[$vn]);
			}

			$astr = implode('', $astr);
			$astr = str_split($astr, $vn);

			if ($astr[0] === strrev($astr[1])) {
				return true
			}
			else {
				return false
			}

	}


	function ifContain($a, $x) {
	//function will check if X is a part of array A

		$i = 0;
		foreach ($a as $value) {
			if ($value === $x) {
				$i++;
			}	
		}

		if ($i<1) {
			echo "X is not in array";
		}
		elseif ($i>1) {
			echo "Our function came across \"$x\" $i times";
		}
		else{
			echo "Our function came across \"$x\" once";
		}

	}


	function sumWithoutPlus($a,$b) {
	//function will return sum of A and B without arithmetic operators
		if ($b < 0) {
			for ($b; $b < 0; $a--) {$b++;}}
		elseif ($b > 0) {
			for ($b; $b > 0; $a++) {$b--;}}
		return ($a);
	}


	function binarySearch($source, $sought) {
	//simple binary search

		$min = 0;
		$max = count($source) - 1;

		$iterationsAmount = log($max, 2);
		$iterationsAmount = round($iterationsAmount+0.5, 0, PHP_ROUND_HALF_UP);

		for ($i = $iterationsAmount; $i > 0; $i--) { 
			$mid = round(($min+$max)/2);

			$point = $source[$mid] <=> $sought;
			switch ($point) {
				case 0:
					return $mid;
					break;
				case -1:
					$min = $mid+1;
					break;
				case 1:
					$max = $mid-1;
					break;
			}
			
		}
	}

?>