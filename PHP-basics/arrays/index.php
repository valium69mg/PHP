<?php

// ARRAYS 
$x = [1,2,3];
$y = [4,5,6];

// x$ + $y does not sum arrays it computes the UNION
print_r($x+$y);
// to sum arrays use array_merge 
$z = array_merge($x,$y);
echo '<br>';
print_r($z);

// ASSOCIATIVE ARRAYS
echo  '<br>';
$x = ['a' => 1, 'b' =>2, 'c'=> 3];
$y = ['d'=> 4, 'e'=> 5, 'f'=> 6];
// THE UNION TAKES UNIQUE KEY VALUES AND THAT WAY WE CAN SUM ARRAYS WITH (+)
print_r($x+$y);