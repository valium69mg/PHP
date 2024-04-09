<?php 

$dateTime = new DateTime('05/12/2021 3:30PM');

var_dump($dateTime);

$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));

var_dump($dateTime);

$dateTime->setTimezone(new DateTimeZone('America/Mexico_City'));

$dateTime->setDate(2024,4,20)->setTime(9,15,0);
echo $dateTime->format('d/m/Y g:i A') . PHP_EOL;

$date = '15/01/1998 11:00PM';

$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);

var_dump($dateTime);