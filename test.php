<?php



function calVowels($str) {
		

		$str = strtolower($str);
		
		$vowels = array('a', 'e', 'o', 'i', 'u');
		$vowelsCnt = array('a' => 0, 'e' => 0, 'o' => 0, 'i' => 0, 'u' => 0);

		// $strArr = explode(' ', $str);

		// var_dump($strArr);

		$total = 0;


		

		for ($i = 0; $i < strlen($str); $i++){
		    // echo $str[$i].'\.;

		    if(in_array($str[$i], $vowels)){
		    	$total++;

		    	$vowelsCnt[$str[$i]] = $vowelsCnt[$str[$i]]  + 1;

		  //   	switch ($str[$i]) {
				// 	case 'a':
				// 			$vowelsCnt['a'] = $vowelsCnt['a'] + 1;
				// 		break;
				// 	case 'e':
				// 			$vowelsCnt['e'] = $vowelsCnt['e'] + 1;
				// 		break;
				// 	case 'i':
				// 		$vowelsCnt['i'] = $vowelsCnt['i'] + 1;
				// 	break;
				// 	case 'o':
				// 			$vowelsCnt['o'] = $vowelsCnt['o'] + 1;
				// 		break;
				// 	case 'u':
				// 			$vowelsCnt['u'] = $vowelsCnt['u'] + 1;
				// 		break;
				// 	default:
				// 		# code...
				// 		break;
				// }

		    }

			
		}

			var_dump($vowelsCnt);
		echo $total;


}



$str = 'i am an indian. I love my country';
calVowels($str);

?>