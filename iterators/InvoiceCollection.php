<?php 

class InvoiceColletion implements \Iterator   {
    public function __construct(public array $invoices) {}


    public function current(){
        var_dump(__METHOD__);
        return current($this->invoices);
    }


    public function next(): void {
        var_dump(__METHOD__);
        next($this->invoices);
    }


    public function key() {
        var_dump(__METHOD__);
        return key($this->invoices);
    }


    public function valid():bool {
        return current($this->invoices) !== false;
    }
    

    public function rewind(): void {
        var_dump(__METHOD__);
        reset($this->invoices);
    }



}