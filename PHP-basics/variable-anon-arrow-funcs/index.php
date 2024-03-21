<?php

/* VARIABLE, ANONYMOUS AND ARROW FUNCTIONS*/

function sum(...$numbers) {
    return array_sum($numbers);
}
$x = 'sum';
if(is_callable($x)) {
    echo $x(1,2,3);
}


// ANONYMOUS FUNCTIONS - FUNTIONS THAT HAVE NO NAME
// THEY NEED TO END WITH A SEMICOLON

$anonFunction = function() { 
    echo "<br>" . "I am anon";
};

$anonFunction();

// CALLBACK FUNCTION AS AN ARG

$array = [1,2,3];
$array2 = array_map(function($element){
    return $element*2;
}, $array);
echo "<br>";
print_r($array);
echo "<br>";
print_r($array2);

// ARROW FUNCTIONS - CLEANER SYNTAX FOR ANON FUNCTIONS

$array = [1,2,3,4];

$array_squares = array_map(fn($number) => $number * $number, $array);
echo "<br>";
print_r($array_squares);