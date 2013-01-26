<?php

$rng = '12-16';

$rng_ar = explode('-',$rng);

$from = $rng_ar[0];
$to = $rng_ar[1];

for ($i = $from; $i <= $to ; $i++) {
	$flag = false;
	if($i%3 == 0) {
		echo ' Fizz ';
		$flag = true; 
	} 
	
	if($i%5 == 0) {
		echo ' Buzz ';
		$flag = true;
	}
	
	if(!$flag) {
		echo ' ' . $i . ' ';
	}
}
