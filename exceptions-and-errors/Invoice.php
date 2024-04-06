<?php

require_once('./Customer.php');

class Invoice {

    public function __construct(public Customer $customer) {

    }

    public function process(float $amount): void {
        echo 'Processing ' . $amount . ' invoice - ';
        if ($amount < 0) {
            throw new \InvalidArgumentException('Invalid invoice amount');
        }

        if (empty($this->customer->getBillingInfo())){
            throw new \InvalidArgumentException('Missing billing information');
        }

        sleep(1);

        echo 'OK' . PHP_EOL;
    }

}