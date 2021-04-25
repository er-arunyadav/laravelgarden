<?php
namespace App\Traits;

trait LedgerTraits{
    public function showBalance(){
        $balance = 'Account balance is Rs. 5000 using traits';
        return $balance;
    }
}