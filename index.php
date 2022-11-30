<?php

$validStr = '{({[}]})';

$invalidStr = '((]))[';


function checkVliadString($str) {

		$brackets = '{} () []';

		$curlyBracketI = false;
		$circlBracketI = false;
		$squareBracketI = false;

		$valid = true;

		$openArr = array();
		for ($i = 0; $i < strlen($str); $i++){


				if(in_array($str[$i], array('(', '{', '['))) {

					$openArr[] = $str[$i];

				}

				if(in_array($str[$i], array(')', '}', ']'))) {

					$openArr[] = $str[$i];
					
				}


				if($str[$i] == '{') {
					$curlyBracketI = true;
					$valid = false;
				}

				if($str[$i] == '}') {

					if($curlyBracketI != true) {
							$valid = false;
					}
					$curlyBracketI = false;
					
				} 

				if($str[$i] == '(') {
					$circlBracketI = true;
					$valid = false;
				}

				if($str[$i] == ')') {

					if($circlBracketI != true) {
							$valid = false;
					}
					
					$circlBracketI = false;

				} 

				if($str[$i] == '[') {
					$squareBracketI = true;
					$valid = false;
				}

				if($str[$i] == ']') {

					if($squareBracketI != true) {
							$valid = false;
					}
					$squareBracketI = false;
					
				} 
		}

		if($valid) {
			return 'Valid string';
		} else {
			return 'Invalid string';
		}

}


$test = '{}';
echo checkVliadString($test);
?>