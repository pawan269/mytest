<?php

$rng = '4-11';

$rng_ar = explode('-',$rng);

$from = $rng_ar[0];
$to = $rng_ar[1];

for ($i = $from; $i <= $to ; $i++) {
	$flag = 0;
	if($i%3 == 0) {
		echo ' Fizz ';
		$flag = 1; 
	} 
	
	if($i%5 == 0) {
		echo ' Buzz ';
		$flag = 2;
	}
	
	if($flag >= 1) {
		echo ' Bazz ';
	} else {
		echo ' ' . $i . ' ';
	}
}

//raju