<?php 

// DEBT COLLECTOR 

interface DebtCollector{

    public function __construct();
    public function collect(float $owedAmount): float;


}