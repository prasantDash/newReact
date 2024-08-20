<?php

namespace App\Facades;

class Invoice{
    public function companyName()
    {
        return 'ABC private ltd';
    }

    public function NumberOfEmp()
    {
        return '1000'."   ".$this->companyName();
    }
}