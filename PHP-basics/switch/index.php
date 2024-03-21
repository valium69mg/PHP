<?php

$paymentStatus = 'paid';

switch($paymentStatus) {
    case 'paid':
        echo "paid"; 
        break; // WE NEED A BREAK STATEMENT OTHERWISE THE NEXT CASES ARE GOING TO BE EXECUTED
    case 'not paid':
        echo "paid";
        break;
    default:
        echo 'default'; // EXECUTES IF NO CASES ARE EXECUTED
}