<?php

function printFibonacciSequence($sequenceLength, $sequenceStart) {
	$sequence = [0, 1];	
	
	$sequenceStartArray = [];
	
	$arrayLength = $sequenceLength + $sequenceStart;

	
	for ($x = 0; $x < $arrayLength; $x++) {
		$sequence[] =  $sequence[ $x ] + $sequence[ $x + 1 ];	
	}

	$sequenceStartArray = array_slice($sequence, $sequenceStart, $sequenceLength);
	
	var_dump($sequenceStartArray);

	return $sequence;	
}

$arr = printFibonacciSequence(6,2);

var_dump($arr);

