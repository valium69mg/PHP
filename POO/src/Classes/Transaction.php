<?php namespace App\Classes;

class Transaction
{
    
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'delcined';

    static public int $count = 0;

    public float $amount;
    public string $description;

    public function __construct($amount,$description,$status){
       $this->amount = $amount;
       $this->description = $description;
       $this->status = $status;
       self::$count++;
    }

    public function printTransaction() {
        echo 'amount: ' . $this->amount . '<br>';
        echo 'description: ' . $this->description . '<br>';
        echo 'status: ' . $this->status . '<br>';
    }
}
