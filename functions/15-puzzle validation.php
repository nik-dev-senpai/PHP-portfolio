<?php

//this function will check if 15-puzzle can be solved

function validation($form) {

		$tmp_form = [];

		foreach ($form as $value) {
			foreach ($value as $a) {
				$tmp_form[] = $a;
			}
		}

		$i = 0;
		foreach ($tmp_form as $main_object) {
			$main_object_key = array_search($main_object, $tmp_form);
			for ($object = $main_object; $object >= 0; $object--) { 
				$object_key = array_search($object, $tmp_form);
				if ($object_key > $main_object_key && $object < $main_object) {
					$i++;
				}
			}
		}

		$null_key = array_search(0, $tmp_form);
		if ($null_key < 4) {
			$i++;
		}
		elseif ($null_key>4 && $null_key<8) {
			$i+=2;
		}
		elseif ($null_key>8 && $null_key<12) {
			$i+=3;
		}
		elseif ($null_key>12 && $null_key<16) {
			$i+=4;
		}


		if ($i % 2 == 0) {
			return false;
		}
		elseif ($i % 2 == 1) {
			return true;
		}
	}

?>