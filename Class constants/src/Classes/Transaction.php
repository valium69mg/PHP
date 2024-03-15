<?php namespace App\Classes;

class Transaction
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'delcined';

    public function __construct($status){
       $this->status = $status;
       
    }
}