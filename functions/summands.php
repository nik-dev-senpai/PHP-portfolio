<?php

	//given a number n (where n >= 1) and your task is to find n consecutive odd numbers whose sum is exactly the cube of n

	//https://www.codewars.com/kata/58af1bb7ac7e31b192000020

	function findSummands($a) {

			$cube = $a **3;
			$arr = [];
			for ($i=1; $i <= $cube - 2; $i += 2) { 
				$arr[] = $i;
			}

			$sumArr = array_rand($arr, $a);
			$sum = 0;
			for ($i=0; $i < $a; $i++) { 
				$sum += $arr[$sumArr[$i]];
				}
			

			if ($sum === $cube) {
				for ($i=0; $i < $a; $i++) { 
				echo $arr[$sumArr[$i]] . ' ';
				}
			}
			else {
				header("refresh:0");
			}

		}

?>