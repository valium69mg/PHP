<?php

// FUNCTIONS

function printHelloWorld() {
    return "Hello World";
}

echo printHelloWorld();

//IN PHP YOU CAN HAVE FUNCTIONS INSIDE OF FUNCTIONS
// DONT RECOMMEND DOING THIS THO
function foo(): string | int { // WE CAN DECLARE THE RETURN TYPE THIS IS GOOD PRACTICE
    function bar() {
        return 2;
    }
    return 'no bar';
}


// FUNCTION PARAMETERS

function skibidi(int|float $x,int|float $y): float {
    return $x - $y;
}
echo '<br>';
$skibitiResult = skibidi(10,2.0);
echo $skibitiResult . var_dump($skibitiResult); // . concatenates strings

// ...
function sumPlenty(...$numbers): float {
    $total_sum = 0;
    for ($i = 0; $i < count($numbers); $i++){
        $total_sum += $numbers[$i];
    }
    return $total_sum;
}
echo '<br>';
echo sumPlenty(2,8,10); // 20