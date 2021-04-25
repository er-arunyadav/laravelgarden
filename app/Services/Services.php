<?php
namespace App\Services;

use App\Interfaces\LedgerInterface;

class Services
{
    private $year;

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }
    public function calculate($enteries)
    {
        $year =  $this->year ? 'and year is '.$this->year : '';
        logger("Data is {$enteries} {$year}");
    }

}
