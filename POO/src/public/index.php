<?php

require('../vendor/autoload.php');

use App\Classes\Transaction;

$transaction = new Transaction(100,'burger place','not paid');

$transaction->printTransaction(); // ACCESSS FUNCTION
var_dump($transaction);
echo '<br>';
var_dump($transaction::$count); // ACCESS STATIC PROPERTIES

