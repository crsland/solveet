<?php

	function pr($d){echo '<pre>'.print_r($d,1).'</pre>';}

	function factorial((int) $n){
		
		
		if($n != 1){
			$result = $n*($n-1)
		}
		return $n*($n-1);
	}
	
	function permutacionSinRepeticion($word){
		
		$tmp = explode('',$word);
		$words = count($tmp);
		$combinations = gmp_fact($words);
		$output = array();
		
		for($i=0;$i<$combinations;$i++){
			
			$lettersToUse;
			$alreadyUsedPositions = array();
			$lettersToUse = $words-1; // Cuz, count give us one more unit than the last position.
			
			for($x=0;$x<$words;$x++){
			
				//if(!in_array($pos, $alreadyUsedPositions)){
					$pos = rand($x,$lettersToUse);
					$output =  $words[$pos];
					$alreadyUsedPositions[] = $pos;
				//}
			}
			$data[] = $output;
		}
	}
	
	
	function permutacionesConRepeticion($word){
		$tmp = explode($word,'');
		$words = count($tmp);
		$combinations = gmp_fact($words);
		$combination = null;
		$data = array();
		for($i=0;$i<$combinations;$i++){
			
			for($x=0;$x<$words;$x++){
				if(!in_array($output ,$data)){
					$output += $tmp[rand(0,$words-1)];
				}
			}
			$data[] = $output;
		}
		return $data;
	}
	
	$perm_c_r = permutacionesConRepeticion('abc');
	pr($perm_c_r);

?>