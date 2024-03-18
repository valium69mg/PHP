<?php

require('../vendor/autoload.php');

use App\Classes\Transaction;

$transaction = new Transaction('not paid');
$status = $transaction->status;
echo $status . '<br>';
