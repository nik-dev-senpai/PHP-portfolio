<?php

	//Write a function that takes a positive integer and returns the next smaller positive integer containing the same digits.

	//https://www.codewars.com/kata/5659c6d896bc135c4c00021e

	function permute($arg) {
		    $array = is_string($arg) || is_int($arg) ? str_split($arg) : $arg;
		    if(1 === count($array)){
		        return $array;
		    }
		    $result = array();
		    foreach($array as $key => $item){
		        foreach(permute(array_diff_key($array, array($key => $item))) as $p){
		            $result[] = $item . $p;
		        }
		    }
		    $result = array_unique($result);
		    sort($result);
		    return $result;
		}

		function nextSmaller ($num) {
			$options = permute($num);
			foreach ($options as $key => $value) {
				if ($num == $options[$key]) {
					$a = $key;
					$a--;
					if ($a < 0) {
						return NULL;
					}
					else {
					return $options[$a];
					break;
					}
				}
			}
		}

?>