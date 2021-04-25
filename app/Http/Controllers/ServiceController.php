<?php

namespace App\Http\Controllers;


use App\Interfaces\LedgerInterface;
use App\Services\Services;
use App\Traits\LedgerTraits;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use LedgerTraits;
    public function index(LedgerInterface $ledger){
        logger($this->showBalance());
        $ledger
        ->setYear(2021)
        ->calculate('INTERFACE');
        return view('topics.services');
    }

    public function traits(){
        return view('topics.traits');
    }
    public function solid(){
        return view('topics.solid');
    }
}
