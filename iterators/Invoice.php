<?php

class Invoice {
    public string $id;

    public function __construct(public float $amount) {
        $this->id = random_int(1000,99999);
    }

}
