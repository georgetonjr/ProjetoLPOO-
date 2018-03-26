<?php 

 function soma ($n1, $n2){
 	$res = $n1 + $n2;
 	return $res;
 }

 function subtrair($n1, $n2){
 	$res = $n1 - $n2;
 	return $res;
 }

 function divisao ($n1, $n2){
 	$res = $n1 / $n2;
 	return $res;
 }

 function faixa_etaria($tot){
 	$name = array();
 	$nome[] = $tot;
 	return $nome;
 }

 function numeros_primos($primof){
 	$primos = array();

 	for ($n = 2; $n <= $primof; $n++) {
		$primo = true;
		for ($x = 2; $x < $n; $x++) {
			if ($n % $x == 0) {
				$primo = false;
				break;
			}
		}
		if ($primo) {
			$primos[]=$n;
		}	
	}
	return $primos;	 
 }