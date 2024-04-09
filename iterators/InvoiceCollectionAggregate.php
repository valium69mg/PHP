<?php

use Exception;

use Transversable;

class InvoiceCollectionAggregate implements \IteratorAggregate {
    private int $key;

    public function __construct(public array $invoices) {

    }

    public function getIterator(): \Traversable { 
        return new \ArrayIterator($this->invoices);
    }
}