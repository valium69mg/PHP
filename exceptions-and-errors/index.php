<?php

require_once('./Invoice.php');

$user = new Customer(['1234567890']);

$myInvoice = new Invoice($user);

try {
    $myInvoice->process(100);
} catch(\Exception $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;
}

try {
    $myInvoice->process(-100);
} catch (\Throwable $e) {
    echo $e->getMessage() . PHP_EOL . $e->getFile() . PHP_EOL . $e->getLine() . PHP_EOL;
}

