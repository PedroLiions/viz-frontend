<?php

namespace App\Services;

class NumberService {

    public function __construct()
    {
    }

    public function formatPercent($number) {
        return number_format($number, '2', ',', '.');
    }

    public function formatThousands($number)
    {
        return number_format($number, '0', '', '.');
    }

}
