<?php 
require_once('./DebtCollector.php');
class CollectionAgency implements DebtCollector {

    public function __construct() {

    }

    public function collect($owedAmount): void {
        echo $owedAmount . '$' . " collected. ";
        echo PHP_EOL;
    }
}
