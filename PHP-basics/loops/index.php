<?php

//while 
$i = 0;

while ($i <= 15) {echo $i++;}
echo '<br>';
$j = 0;
while (true){
    if ($j > 15) {
        break;
    } else {
        echo $j++;
    }
}
echo '<br>';
// do while 
$k = 0;
do {
    echo $k++;
} while ($k < 15);
echo '<br>';
// for

for ($i = 1,$length = 10; $i <= $length; $i++) {
    echo $i;
}
// foreach 
echo '<br>';
$programmingLanguages = ['Javascript','Python','PHP'];
foreach($programmingLanguages as $key => $language) {
    echo $language . '<br>';
}
 // THE VARIABLE $language DOES NOT GO AWAY AFTER THE LOOP IS FINISHED
 // WE NEED TO GET RID OF IT TO AVOID FUTURE ISSUES
 unset($language);