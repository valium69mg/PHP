<?php

require_once('./Invoice.php');
require_once('./InvoiceCollection.php');
require_once('./InvoiceCollectionAggregate.php');

foreach(['a','b','b','d'] as $key => $value) {
    echo $key . '=' . $value . PHP_EOL;
}

echo PHP_EOL;

foreach(new Invoice(25) as $key => $value) {
    echo $key . '=' . $value . PHP_EOL;
}

echo PHP_EOL;

$invoiceColletion = new InvoiceColletion([new Invoice(10),new Invoice(15), new Invoice(20)]);

var_dump($invoiceColletion);

// This example demonstrates in which order methods are called when using foreach with an iterator.
foreach($invoiceColletion as $invoice) {
    echo $invoice->id . '-' . $invoice->amount . PHP_EOL;
}


$invoiceColletion = new InvoiceCollectionAggregate([new Invoice(10),new Invoice(15), new Invoice(20)]);

echo 'Aggregate Iterator: ' .PHP_EOL;
var_dump($invoiceColletion->getIterator());
