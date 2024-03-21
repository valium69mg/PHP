<?php

// DELCARE STRICT TYPES

declare(strict_types=1); 

function multiply(int $x,int $y): int {
    return $x * $y;
}

echo multiply(2,5);

/*
function sum(int $a, int $b): int {
    return $a + $b; // STOPS THE EXCECUTION OF THE FUNCTION
    echo "Hello"; // UNREACHABLE
}

$c = sum(2,4);
echo "{$c}";
echo "<br>";

$x = 3;
$y = 5;
$z = $x + $y;

// declare - ticks
// each of the declarations below calls a tick
// THE FUNCTION EXECUTES EVERY 3 EVENTS THAT CALL A TICK
$i = 0;
$length = 12;
function onTick() {
    echo "Tick <br>";
}

register_tick_function('onTick');

declare(ticks = 1);



for ($i; $i < $length ; $i++) {
    echo $i++ . '<br>';
}


*/