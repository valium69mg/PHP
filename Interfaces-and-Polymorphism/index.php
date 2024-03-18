<?php



require_once('./CollectionAgency.php');
require_once('./DebtCollector.php');

$collector = new CollectionAgency();


$collector->collect(100.0);

