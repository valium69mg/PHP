<?php 

class CollectionAgency implements DebtCollector {

    public function __construct() {

    }

    public function collect($owedAmount) {
        echo $owedAmount . '$' . " collected. ";
        echo '<br>';
    }
}
